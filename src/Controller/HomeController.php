<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'company_name' => 'Globalway Tours',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'company_name' => 'Globalway Tours',
        ]);
    }
    // #[Route('/sendMail', name: 'app_send_mail', methods: ['POST'])]
    // public function sendMail(Request $request): Response
    // {
    //     $name = $request->request->get('name');
    //     $email = $request->request->get('email');
    //     $subject = $request->request->get('subject');
    //     $message = $request->request->get('message');

    //     $destinationEmail = 'issatengen12@gmail.com';
    //     $emailSubject = "Contact Form Submission: $subject";
    //     $emailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    //     $headers = 'From: '. $email . "\r\n" .
    //                'Reply-To: ' . $email . "\r\n" .
    //                'X-Mailer: PHP/' . phpversion();

    //     if(mail($destinationEmail, $emailSubject, $emailBody, $headers)) {
    //         $this->addFlash('success', 'Your message has been sent successfully!');
    //     } else {
    //         $this->addFlash('error', 'There was an error sending your message. Please try again later.');
    //     }
    //     return $this->redirectToRoute('app_contact');
    // }
}
