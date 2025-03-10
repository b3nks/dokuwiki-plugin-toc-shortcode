<?php
if (!defined('DOKU_INC')) die();

class action_plugin_toc_shortcode extends DokuWiki_Action_Plugin {

    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('PARSER_WIKITEXT_PREPROCESS', 'BEFORE', $this, 'replace_inhalt');
    }

    public function replace_inhalt(Doku_Event $event) {
        // Dein gewünschter Ersatztext
        $replacement = '<nspages -sidebar -hideNoPages -hideNoSubns -simpleList -h1 -subns -exclude:[start impressum: datenschutzerklaerung:] -textNS="" -textPages="">';

        // Ersetze <inhalt> durch den gewünschten Text
        $event->data = str_replace('{inhaltsverzeichnis}', $replacement, $event->data);
    }
}
