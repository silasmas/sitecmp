
<!-- Page Content Section Start -->
<section class="page--content--section pt--80 pb--60">
    <div class="container">
        <!-- Page Content Inner Start -->
        <div class="page--content-inner">
            <div class="sub-title">
                @if($web)
                <a href="{{ $web}}"><h3 class="h3">{{ $hotel_name }} </h3></a>
                @else
                <h3 class="h3">{{ $hotel_name }} </h3>
                @endif
                <div class="rating">
                    <ul class="nav">
                        @for($i = 0; $i < $etoiles; $i++)
                            <li><i class="fa fa-star"></i></li>
                        @endfor
                    </ul>
                </div>
            </div>

            <div class="desc">
                <p>{{ $description}} <br>
                La Distance entre {{$hotel_name}} et  CMP Gombe est de 3.5 Km, 
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
        </p>
                

            </div>
        </div>
        <!-- Page Content Inner End -->
    </div>
</section>
<!-- Page Content Section End -->
                        
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


                    
                