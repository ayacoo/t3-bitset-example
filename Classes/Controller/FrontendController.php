<?php
namespace Ayacoo\Bitset\Controller;

use Ayacoo\Bitset\Service\Weekday;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class FrontendController extends ActionController {

    /**
     * @var PageRepository $pageRepository
     */
    public $pageRepository;

    /**
     * FrontendController constructor.
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository) {
        $this->pageRepository = $pageRepository;
    }

    public function indexAction() {
        $page = $this->pageRepository->getPage($GLOBALS['TSFE']->id);
        $weekdayCheck = new Weekday($page['weekday']);
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::SUNDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::MONDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::TUESDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::WEDNESDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::THURSDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::FRIDAY));
        DebugUtility::debug($weekdayCheck->hasWeekday(Weekday::SATURDAY));
        DebugUtility::debug($weekdayCheck->hasAllWeekdays());
    }
}