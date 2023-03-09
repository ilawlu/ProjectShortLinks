<?php

namespace App\Http\Controllers;

use Str;
use App\Http\Requests\LinksRequest;
use App\Link;
use App\Service\LinkService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function show()
    {
        return view('links.show');
    }

    public function send(LinksRequest $request, LinkService $service)
    {
        $url = $request->input('url');
        $urlPrefix = $service->getLinkPrefixGenerate();

        $link = Link::create([
            'source_link' => $url,
            'link_key' => $urlPrefix
        ]);

        if($link) {
            return back()->with('success', route('links.away', ['prefix' => $urlPrefix]));
        }

        return back()->with('errors', 'Не удалось сохранить ссылку');
    }

    public function away(string $prefix)
    {
        $link = Link::where(['link_key' => $prefix])->firstOrFail();
        if($link) {
            return redirect()->away($link->source_link);
        }
        
    }
}
