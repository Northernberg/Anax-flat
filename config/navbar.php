<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisningstext"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningstext"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "test" => [
                "text"  => t("test"),
                "url"   => $this->di->get("url")->create("test"),
                "title" => t("About this website")
            ],

            "grid" => [
                "text"  => t("grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typo stuff")
            ],

            "Analysis" => [
                "text"  => t("Analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis stuff")
            ],

            "Theme-selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector")
            ],

            "blogg" => [
                "text"  => t("blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg")
            ],

            "images" => [
                "text"  => t("images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("test images")
            ],
            "design-element" => [
                "text"  => t("design-element"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("design-elements")
            ],
            "design-principles" => [
                "text"  => t("design-principle"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("design-principle")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website"),
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
