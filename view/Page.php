<?php

namespace homePage\view;

class Page
{
    public function render ($pageContent)
    {

        $template = $this->getTemplate();
        $completedTemplate = $this->fillTemplate($template, $pageContent);
        $this->drawPage($completedTemplate);
    }

    private function fillTemplate ($template, $pageContent)
    {
        $openTag = "{";
        $closeTag = "}";

        $template = str_replace($openTag.'TITLE'.$closeTag, $pageContent['title'], $template);
        $template = str_replace($openTag.'CONTENT'.$closeTag, $pageContent['content'], $template);
        
        if (!is_null($pageContent['picture'])) {
            $template = str_replace($openTag.'PICTURE'.$closeTag, '/public/picture/'.$pageContent['picture'], $template);
        } else {
            $template = str_replace($openTag.'PICTURE'.$closeTag, '/public/picture/dummy.jpg', $template);
        }
        return $template;
    }

    private function getTemplate()
    {
        $file = fopen($_SERVER['DOCUMENT_ROOT'].'/public/html/Page.html', 'r');
        $html = fread($file, filesize($_SERVER['DOCUMENT_ROOT'].'/public/html/Page.html'));
        fclose($file);
        return $html;
    }

    private function drawPage($page)
    {
        echo $page;
    }
}
