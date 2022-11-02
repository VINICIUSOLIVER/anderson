<?php

namespace App\Pdf;

class Pdf
{
    /**
     * @var string
     */
    protected $id = '';
    /**
     * @var null|string
     */
    protected $view = null;
    /**
     * @var string
     */
    protected $name = "relatorio";
    /**
     * @var null|string
     */
    protected $folder = null;
    /**
     * @var array
     */
    protected $margins = [
        "--margin-bottom 25.4mm",
        "--margin-left 25.4mm",
        "--margin-right 25.4mm",
        "--margin-top 25.4mm"
    ];
    /**
     * @var array
     */
    protected $params = [
        "--encoding 'UTF-8'",
        "--page-size A4"
    ];
    /**
     * @var string
     */
    protected $tool = '';
    /**
     * Pdf constructor.
     * @param $view
     * @param $name
     * @param $folder
     */
    public function __construct($view, $name, $folder = null)
    {
        $this->id = time();
        $this->view = $view;
        $this->name = $name;
        $this->tool = realpath(__DIR__ . "/../wkhtmltox/bin/wkhtmltopdf");
        $this->folder = $folder ?? storage_path() . "/";
    }
    /**
     * @return bool
     */
    public function createHtmlFile()
    {
        try {
            file_put_contents($this->getHtmlFullPath(), $this->view);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    /**
     * @param mixed ...$params
     * @return $this
     */
    public function addParams(...$params)
    {
        $this->params = $this->params + $params;

        return $this;
    }
    /**
     * @throws \Exception
     */
    public function generate()
    {
        if (!$this->createHtmlFile()) {
            throw new \Exception("File generation failed.", 500);
        }

        $mergeParams = array_merge($this->params, $this->margins);

        $params = join($mergeParams, " ");
        $execCommand = "{$this->tool} {$params} {$this->getHtmlFullPath()} {$this->getPdfFullPath()}";

        exec($execCommand);
    }

    public function download()
    {
        $this->generate();

        $pdfContent = $this->getContentFilePdf();

        $this->fileDestroy();

        return response()->streamDownload(function () use ($pdfContent) {
            echo $pdfContent;
        }, "{$this->name}.pdf");
    }
    /**
     * @return false|string
     */
    protected function getContentFilePdf()
    {
        $contents = file_get_contents($this->getPdfFullPath());

        if ($contents === false) {
            return "";
        }

        return $contents;
    }
    /**
     * @return string
     */
    public function getHtmlFileName()
    {
        return "{$this->name}_{$this->id}.html";
    }
    /**
     * @return string
     */
    public function getPdfFileName()
    {
        return "{$this->name}_{$this->id}.pdf";
    }
    /**
     * @return string
     */
    public function getHtmlFullPath()
    {
        return "{$this->folder}{$this->getHtmlFileName()}";
    }
    /**
     * @return string
     */
    public function getPdfFullPath()
    {
        return "{$this->folder}{$this->getPdfFileName()}";
    }
    /**
     * @return bool
     */
    protected function fileDestroy()
    {
        try {
            if (file_exists($this->getHtmlFullPath())) {
                unlink($this->getHtmlFullPath());
            }

            if (file_exists($this->getPdfFullPath())) {
                unlink($this->getPdfFullPath());
            }

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
    /**
     * @param string $path
     * @return $this
     */
    public function setToolPath($path)
    {
        $this->tool = $path;

        return $this;
    }
    /**
     * @return Pdf
     */
    public function margins($top, $right, $bottom, $left)
    {
        $this->margins = [
            "--margin-bottom {$bottom}mm",
            "--margin-left {$left}mm",
            "--margin-right {$right}mm",
            "--margin-top {$top}mm"
        ];

        return $this;
    }
}