CREATE TABLE IF NOT EXISTS `PREFIX_product_video` (
    `id_product_video` int(11) NOT NULL AUTO_INCREMENT,
    `id_product` int(11) NOT NULL,
    `id_lang` int(11) NOT NULL,
    `video_url` varchar(255) NOT NULL,
    `video_type` varchar(20) DEFAULT 'youtube',
    `title` varchar(255) DEFAULT NULL,
    `description` text,
    `position` int(11) DEFAULT 0,
    `active` tinyint(1) DEFAULT 1,
    `cover` tinyint(1) DEFAULT 0,
    `date_add` datetime NOT NULL,
    `date_upd` datetime NOT NULL,
    PRIMARY KEY (`id_product_video`),
    KEY `id_product` (`id_product`),
    KEY `id_lang` (`id_lang`)
) ENGINE=ENGINE_TYPE DEFAULT CHARSET=utf8;