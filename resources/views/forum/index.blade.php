<x-layout.forum>
    <x-slot name="title">Главная страница форума</x-slot>
    <x-slot name="content">
        <h1>Главная страница форума</h1>
        <p class="lead">Добро пожаловать!</p>
        @each('forum.topic_list_row', $topics, 'topic')
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if($topics->currentPage() != 1)
                        <li class="page-item"><a class="page-link" href="{{ $topics->previousPageUrl() }}">Previous</a></li>
                    @endif
                    @for($i = 1; $i <= $topics->lastPage(); $i++)
                        @php
                            $isActive = false;
                            $hasError = true;
                        @endphp
                        <li @class([
                                'page-item',
                                'active' => $topics->currentPage() === $i,
                            ])>
                            <a class="page-link" href="{{ $topics->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    @if($topics->currentPage() < $topics->lastPage())
                        <li class="page-item"><a class="page-link" href="{{ $topics->nextPageUrl() }}">Next</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </x-slot>
</x-layout.forum>
