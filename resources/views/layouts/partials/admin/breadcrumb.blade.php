@if(count($breadcrumbs))
    <nav class="mb-4">
        <ol class="flex flex-wrap">
            @foreach($breadcrumbs as $item)
                <li class="text-sm leading-normal text-slate-700 {{ !$loop->first ? 'pl-2' : '' }}">
                    @isset($item['route'])
                        <a href="{{ $item['route'] }}" class="opacity-50">
                            {{ $item['name'] }}
                        </a>
                    @else
                        {{ $item['name'] }}
                    @endisset
                    @if(!$loop->first)
                        <span class="px-2">/</span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
