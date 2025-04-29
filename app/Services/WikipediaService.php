<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class WikipediaService
{
    protected string $lang = 'id';

    public function getAttraction(string $title): ?array
    {
        $url = "https://{$this->lang}.wikipedia.org/api/rest_v1/page/summary/" . urlencode($title);
        $res = Http::get($url);
        $data = $res->json();
    
        return [
            'nama' => $data['title'] ?? $title,
            'deskripsi' => $data['extract'] ?? '-',
            'gambar' => $data['thumbnail']['source'] ?? asset('assets/images/default.jpg'),
            'link' => $data['content_urls']['desktop']['page'] ?? '#',
        ];        
    }
    
}
