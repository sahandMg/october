<?php 
class Cms5d4c5a4dbf49d483875632_98b4416162d8fbabb1672c9bba58bc54Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
