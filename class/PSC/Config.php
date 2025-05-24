<?php

namespace PSC {
    class Config {
        private $config = [
            "name" => "Example",
            "motto" => "oirsjgeorjfqiejfoiwjrw",
            "url" => "https://google.com/",
        ];
        
        public function __constructor(array $confoptions) {
            $config = array_merge($confoptions, $config);
        }

        public function Link($endpoint) {
            return $this->config["url"].$endpoint;
        }

        public function Redirect($endpoint) {
            $redir = $this->config["url"].$endpoint;
            header("Location: $redir");
        }

        public function Property($x, $y = false) {
            if($y == false) return $this->config[$x];
            else this->config[$x] = $y;
        }

        
        public function Name() {
            return $this->config["name"];
        }

        public function Motto() {
            return $this->config["motto"];
        }

        public function Rename($sitename) {
            $this->config["name"] = $sitename;
        }
        
        public function ChangeMotto($sitemotto) {
            $this->config["motto"] = $sitemotto;
        }

        public function ChangeUrl($siteurl) {
            $this->config["url"] = $siteurl;
        }
    }  
}
