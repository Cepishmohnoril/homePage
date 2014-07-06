<?php
namespace homePage\model;

class Page extends \homePage\abs\Model
{
    
    private $title;
    private $content;
    private $picture;
    protected $request;
    protected $table = "Page";

    public function getTitle ()
    {
        return $this->title;
        return $this;
    }

    public function setTitle ($title)
    {
        $this->title = $title;
        return $this;
    }
    
    public function deleteTitle ()
    {
        unset($this->title);
        return $this;
    }

    public function getContent ()
    {
         return $this->content;
         return $this;
    }

    public function setContent ($content)
    {
        $this->content = $content;
        return $this;
    }
    
    public function deleteContent ()
    {
        unset($this->content);
        return $this;
    }

    public function getPicture ()
    {
        return $this->picture;
        return $this;
    }

    public function setPicture ($picture)
    {
        $this->picture = $picture;
        return $this;
    }
    
    public function deletePicture ()
    {
        unset($this->picture);
        return $this;
    }

    protected function setObject ($dataArray)
    {
        $this->setTitle($dataArray['title'])->setContent($dataArray['content'])->setPicture($dataArray['picture']);
    }

    public function getObjectDataAsArray ()
    {
        $objectData = array("title" => $this->title, "content" => $this->content, "picture" => $this->picture);
        return $objectData;
    }
}
