<?php
declare(strict_types = 1);

namespace App\UI\Action;


use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use App\UI\Responder\Interfaces\HomeResponderInterface;

/**
 * Class HomeAction
 * @package App\UI\Action
 * @Route(
 *     path="/"
 * )
 */
class HomeAction implements HomeActionInterface
{
    /**
     * @var FormFactoryInterfece
     */
    private $formFactory;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var FileUploaderHelper
     */
    private $fileUploaderHelper;

    /**
     * @var AddArticleTypeHandlerInterface
     */
    private $addArticleTypeHandler;

    /**
     * HomeAction constructor.
     * @param FormFactoryInterface $formFactory
     * @param EventDispatcherInterface $eventDispatcher
     * @param FileUploaderHelper $fileUploaderHelper
     * @param AddArticleTypeHandlerInterface $addArticleTypeHandler
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        EventDispatcherInterface $eventDispatcher,
        FileUploaderHelper $fileUploaderHelper,
        AddArticleTypeHandlerInterface $addArticleTypeHandler
    ) {
        $this->formFactory = $formFactory;
        $this->eventDispatcher = $eventDispatcher;
        $this->fileUploaderHelper = $fileUploaderHelper;
        $this->addArticleTypeHandler = $addArticleTypeHandler;
    }

    public function __invoke(Request $request, HomeResponderInterface $responder)
    {
        $addArticleType = $this->formFactory->create(AddArticleType::class)->handleRequest($request);

        if ($this->addArticleTypeHandler->handle($addArticleType)) {
            return $responder(true);
        }

        return $responder(false, $addArticleType);
    }
}