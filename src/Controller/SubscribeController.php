public function showForm(): Response
{
    $form = $this->createForm(SubscribeType::class);

    return $this->render('subscribe/index.html.twig', [
        'form' => $form,
    ]);
}
#[Route('/subscribe', name: 'app_subscribe', methods: ['POST'])]
public function proceed(Request $request): Response
{
    dd($request->getPayload()->all());
}