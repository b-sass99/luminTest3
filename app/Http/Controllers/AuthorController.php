namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{



    public function showOneAuthor($id)
    {
        return response()->json({'status': 'complete'});
    }

    public function create(Request $request)
    {
        echo "your text";

        return response()->json({'status': 'complete'}, 201);
    }

    <!-- public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    } -->


