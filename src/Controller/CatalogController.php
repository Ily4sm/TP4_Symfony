use App\Form\Type\AddToWishlistType;
use Symfony\Component\HttpFoundation\Request;

public function show(int $id, Request $request): Response
{
    $course = $this->courseRepository->find($id);

    $form = $this->createForm(AddToWishlistType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->addFlash('success', 'Cours ajouté à votre wishlist');
    }

    return $this->render('catalog/show.html.twig', [
        'course' => $course,
        'form'   => $form,
    ]);
}