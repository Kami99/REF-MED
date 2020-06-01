<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\AddArticleType;
use App\Repository\KeywordRepository;
use App\Repository\ArticlesRepository;
use App\Repository\UsersBlogRepository;
use App\Repository\CategoriesRepository;
use App\Repository\CommentairesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   /**
     * @Route("/blog")
     */
class BlogController extends AbstractController
{
    /**
     * @var CategoriesRepository
     */
    private $categoriesRepository;

        /**
     * @var KeywordRepository
     */
    private $keywordRepository;

    /**
     * @var CommentairesRepository
     */
    private $CommentairesRepository;

    /**
     * @var ArticlesRepository
     */
    private $articlesRepository;
    /**
     * 
     *
     * @var PaginatorInterface
     */
    private $paginator;

    private $User;
    

    public function __construct(ArticlesRepository $articlesRepository, CategoriesRepository $categoriesRepository, CommentairesRepository $commentairesRepository, KeywordRepository $keywordRepository , PaginatorInterface $paginator){
        $this->articlesRepository=$articlesRepository;
        $this->categoriesRepository=$categoriesRepository;
        $this->CommentairesRepository=$commentairesRepository;
        $this->keywordRepository=$keywordRepository;
        $this->paginator=$paginator;
        
    }
    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request, Security $security)
    {
        $User=$security->getUser();
        $keywords=$this->keywordRepository->findAllVisible();
        $articles=$this->paginator->paginate($this->articlesRepository->findAllVisibleQuery(), 
        $request->query->getInt('page', 1), 9);
        $postsPopular=$this->articlesRepository->findPopularPost();   
        $lastestCategories=$this->categoriesRepository->findTreeLastest();
        return $this->render('blog/homeBlog.html.twig', [
            'keywords'=> $keywords, 
            'lastestCategories'=> $lastestCategories, 
            'articles'=> $articles, 
            'popular_posts'=> $postsPopular, 

        ]);
    }

    
    /**
     * @Route("/contact", name="contactBlog")
     */
    public function contactBlog()
    {
        return $this->render('blog/contactBlog.html.twig', [
        ]);
    }
    /**
     * @Route("/article/{slug}-{id}", name="article.show", requirements={"slug": "[a-z0-9\-]*"})
     */
    public function showArticle(Articles $article, string $slug)
    {
        
        $keywords=$this->keywordRepository->findAllVisible();
        $postsPopular=$this->articlesRepository->findPopularPost();   
        if ($article->getSlug()!==$slug) {
            return $this->redirectToRoute('article.show',[
                'id'=>$article->getId(),
                'slug'=>$article->getSlug(),
            ], 301);
        }
        return $this->render('blog/showArticle.html.twig', [
            'article'=>$article,
            'keywords'=> $keywords, 
            'popular_posts'=> $postsPopular, 
        ]);
    }
            /**
     * @Route("/createPost", name="createPost")
     */
    public function createPost(Request $request)
    {
        $article=new Articles();
        $keywords=$this->keywordRepository->findAllVisible();
        $user = $this->getUser();
        $article->setUsersBlog($user);
        $form=$this->createForm(AddArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            $this->addFlash(
                'success',
                "Ce rendez vous a été modifier"
            );
            return $this->redirectToRoute('home');
        }
    }
    /**
     *  @Route("/allPostCategory", name="allPostCategory")
     */
    public function allPostCategory(Request $request)
    {
        $keywords=$this->keywordRepository->findAllVisible();
        $articles=$this->paginator->paginate($this->articlesRepository->findAllVisibleQuery(), 
        $request->query->getInt('page', 1), 9);
        $postsPopular=$this->articlesRepository->findPopularPost();
        return $this->render('blog/allPostCategory.html.twig', [
            'keywords'=> $keywords, 
            'articles'=> $articles, 
            'popular_posts'=> $postsPopular, 
        ]);
    }
}
