<label for="kategori_id" class="sr-only">Kategori</label>
<select id="kategori_id" class="py-3 px-4 pe-9 mt-2 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
    <option value="0" selected>Semua Kategori</option>
    @forelse ($kategori as $value)
        <option value="{{ $value->id }}">{{ $value->name }}</option>
    @empty
        <option disabled>Kategori Tidak Ada</option>               
    @endforelse
</select>

@foreach ($users as $user)
    @foreach ($user->pertanyaan as $pertanyaan)
        <div class="pertanyaan-container" data-kategori="{{ $pertanyaan->kategori_id }}">
            <h3 class="text-2xl text-white dark:text-white mt-3">{{ $user->name }}</h3>
            <div class="bg-slate-700 p-2 border-2 rounded-md mt-4">
                <div class="flex items-center text-white">
                    <div>
                        <p>{{ $pertanyaan->tulisan }}</p>
                    </div>
                    @if(Auth::check() && $user->id == Auth::user()->id)
                    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                          <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="py-2 mx-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Edit
                          </a>
                    </form>
                    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                        <button type="submit" class="py-2 mx-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Hapus</button>
                    </form>
                @endif
                </div>
                
                <div class="border-l border-r p-2 mt-4">
                    @if ($pertanyaan->jawaban->count() > 0)
                        <h3 class="text-2xl dark:text-white text-white">Komentar</h3>
                        <div>
                            @foreach ($pertanyaan->jawaban as $jawaban)
                                <h6 class="text-base text-white dark:text-white mx-3">{{ $jawaban->user->name }}
                                   </h6>
                                <div class="grid grid-cols-4 gap-1">
                                <div class=" text-white col-span-3 py-3 px-4 w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">{{ $jawaban->tulisan }}
                                </div>
                                <div class="col-span-1">
                                    <div class="inline">
                                @if(Auth::check() && $user->id == Auth::user()->id)
                                <form action="/jawaban/{{$jawaban->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                      <a href="/jawaban/{{$jawaban->id}}/edit" class="py-2 mx-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                            Edit
                                      </a>
                                </form>
                                <form action="/jawaban/{{$jawaban->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="jawaban_id" value="{{ $jawaban->id }}">
                                    <button type="submit" class="py-2 mx-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Hapus</button>
                                </form>
                                    </div>
                            </div>
                            @endif
                            </div>
                            @endforeach
                        </div>
                    @else
                        <p>Belum ada jawaban untuk pertanyaan ini.</p>
                    @endif
                </div>

                <form action="/jawaban" method="POST">
                    @csrf
                    <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
                    <label for="tulisan" class="sr-only">Comment</label>
                    <textarea id="tulisan" name="tulisan" class="py-3 px-4 mt-5 block w-64 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" rows="3" placeholder="Comment Right Here..."></textarea>
                    <button type="submit" class="py-2 mt-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Comment
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endforeach
