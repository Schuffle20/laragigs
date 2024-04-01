<h1>Listings</h1>

<p>{{$heading}}</p>
@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}"> {{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach