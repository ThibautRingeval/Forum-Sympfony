<?php
    // src/Controller/LuckyController.php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    class LuckyController
    {
       /**
        * @Route("/lucky_number", name="app_lucky_number")
        */
        public function number(): Response
        {
            $number = random_int(0, 100);
            
            $user = [
                'firstName' => 'John',
                'lastName' => 'Doe',
            ];
            
            dump($user);
    
            return new Response(
                "<html><body><p>Lucky number: $number</p></body></html>"
                
            );
        }
    }