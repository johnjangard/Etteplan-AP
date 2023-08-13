<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class XMLController extends Controller
{
    public function index()
    {
        //Hämtar XML-fil
        $XML = Storage::disk('public')->get('file.xml');

        //Läser av fil som XML
        $xmlObject = simplexml_load_string($XML);

        //Hitta sektion av fil med rätt id
        $result = $xmlObject->xpath("//root/file/body/trans-unit[@id='42007']");

        //Hämtar värde i target
        $target = $result[0]->target;

        //Skapar fil för nedladdning med target-värde
        Storage::disk('public')->put('result.txt', $target);

        //Skickar användare till sida för att ladda ner fil
        return view('result');
    }
}
