<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use App\Entity\Member;
use App\Form\MemberType;

/**
 * Member controller.
 * @Route("/api", name="api_")
 */
class MemberController extends FOSRestController
{
    /**
     * Lists all members
     * @Rest\Get("/members")
     *
     * @return Response
     */
    public function getMembersAction()
    {
        $repository = $this->getDoctrine()->getRepository(Member::class);
        $members = $repository->findall();
        
        return $this->handleView($this->view($members));
        //return View::create($members, Response::HTTP_OK);
    }

    /**
     * Create a new member
     * @Rest\Post("/member")
     *
     * @return Response
     */
    public function postMemberAction(Request $request)
    {
        $member = new Member();
        $form = $this->createForm(MemberType::class, $member);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }
}
