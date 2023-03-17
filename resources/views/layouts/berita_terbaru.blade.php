   <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
       <div class="w-full bg-white h-full">
           <div class="text-sm py-6 sticky">
               <div class="w-full">

                   <h2 class="text-gray-800 text-2xl font-bold">
                       <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>
                       Berita Terbaru
                   </h2>
                   @if ($berita->count() > 0)
                   @foreach ($berita as $b)

                   <ul>
                       <li class="border-b border-gray-100 hover:bg-gray-50 py-3">

                           <?php
                            $dom = new \DomDocument();
                            @$dom->loadHtml($b->isi_berita, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                            if ($dom->getElementsByTagName('img')->length > 0) {
                                $images = $dom->getElementsByTagName('img');
                                $img = $images->item(0);
                                $src = $img->getAttribute('src');
                            } else {
                                $src = str_replace('"', '', asset('logo.png'));
                            }
                            ?>

                           <img src="{{ $src }}" alt="alt title" class=" float-left mr-3 rounded" style="height: 50px; width: 50px">

                           <div class="flex flex-col">
                               <a class="text-md font-bold px-6 flex flex-row items-center" href="{{ route('news.detail', $b->slug) }}">
                                   {{ $b->judul_berita }} </a>
                               <div class="row px-6 flex flex-row py-1 items-center">
                                   <i class="fa fa-calendar text-gray-500 mr-2"></i>
                                   <span class="text-gray-500 text-sm">{{ $b->created_at }}</span>
                               </div>
                           </div>
                       </li>

                   </ul>
                   @endforeach
                   @else
                   <div class="border-b border-gray-100 hover:bg-gray-50 py-3">
                       <p class="text-center">Belum ada berita</p>
                   </div>
                   @endif
               </div>
           </div>
       </div>
   </div>