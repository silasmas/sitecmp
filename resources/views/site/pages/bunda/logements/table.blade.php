<div class="card">
    <div class="card-header" id="{{ "heading".$id }}"  {{$active=="show"?'style="background: #FFFFFF"':""}}>
        <h5 class="mb-0">
            <a href="{{$web==""?"":$web}}" class="btn btn-link" style="color: #650F1C " data-bs-toggle="collapse" data-bs-target="{{ "#collapse".$id }}"
                aria-expanded="true" aria-controls="{{ "collapse".$id }}">{{ $hotel_name}}
                <div class="product-rating">
                    <ul class="nav">
                        @for($i = 0; $i < $etoiles; $i++) <li><i class="fa fa-star"></i></li>@endfor
                    </ul>
                </div>
            </a>
        </h5>
    </div>
    <div id="{{ "collapse".$id }}" class="collapse {{$active=="show"?$active:""}}" aria-labelledby="{{ "heading".$id }}" data-bs-parent="#accordion">
        <div class="card-body">
            {{ $description}} <br>
            La Distance entre {{$hotel_name}} et CMP Gombe est de 3.5 Km,
            et celle avec l'Aéroport de N'djili est 24.8 Km <br>
            @if($telephone)
            <i class="fa fa-phone"></i> : {{$telephone}} <br>
            @endif
            @if($email)
            <i class="fa fa-envelope"></i> : {{$email}}<br>
            @endif
            @if($web)
            Visitez sur <a href="{{ $web }}">{{ $web }}</a>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Libelle</th>
                        <th>Prix</th>
                        <th>Nombre</th>
                        <th>Observation</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- 1. Bethanie -->
                    @foreach ($items as $item)
                    <tr style="height:80px">
                        <td>{{ $item[0]}}</td>
                        <td>{{ $item[1]}}</td>
                        <td>{{ $item[2]}}</td>
                        <td>{{ $item[3]}}</td>
                        <td>{{ $item[4]}}</td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>
