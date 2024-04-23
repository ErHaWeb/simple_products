<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'SimpleProducts',
        'Pi1',
        [
            \ErHaWeb\SimpleProducts\Controller\ProductController::class => 'list, show'
        ],
        [
            \ErHaWeb\SimpleProducts\Controller\ProductController::class => ''
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.ext-simple_products {
                header = Simple Products
                after = common
                elements {
                    pi1 {
                        iconIdentifier = tx_simpleproducts_pi1
                        title = LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_pi1.name
                        description = LLL:EXT:simple_products/Resources/Private/Language/locallang_db.xlf:tx_simpleproducts_pi1.description
                        tt_content_defValues {
                            CType = simpleproducts_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
