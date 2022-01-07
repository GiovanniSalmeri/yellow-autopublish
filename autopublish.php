<?php
// Autopublish extension, https://github.com/GiovanniSalmeri/yellow-autopublish

class YellowAutopublish {
    const VERSION = "0.8.18";
    const PRIORITY = "9";   // before YellowDraft
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMeta($page) {
        if (strtotime($page->get("published"))>time()) {
            if ($this->yellow->extension->isExisting("draft")) {
                $page->set("status", "draft");
            } else {
                $page->error(500, "Autopublish requires 'draft' extension!");
            }
        }
    }
}
