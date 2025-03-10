<?php
if (!defined('DOKU_INC')) die();

class action_plugin_tocshortcode extends DokuWiki_Action_Plugin {

    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('PARSER_WIKITEXT_PREPROCESS', 'BEFORE', $this, 'replace_inhalt');
    }

    public function replace_inhalt(Doku_Event $event) {
        // Dein gewünschter Ersatztext
        $replacement = '<nspages -sidebar -hideNoPages -hideNoSubns -simpleList -h1 -subns -exclude:[start sidebar] -textNS="" -textPages="">';

        // Ersetze {inhaltsverzeichnis} durch deinen gewünschten Shorcode
        $event->data = str_replace('{inhaltsverzeichnis}', $replacement, $event->data);
    }
}
