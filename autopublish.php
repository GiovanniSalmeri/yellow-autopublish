<?php
// Autopublish extension, https://github.com/GiovanniSalmeri/yellow-autopublish

class YellowAutopublish {
    const VERSION = "1.0.0";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMetaData($page) {
        if ($this->yellow->extension->isExisting("draft")) {
            if ($page->get("status")!=="shared") {
                if (strtotime($page->get("published"))>time()) {
                    $page->set("status", "draft");
                    $page->visible = false;
                }
            }
        } else {
            $page->error(500, "Autopublish requires 'draft' extension!");
        }
    }
}
