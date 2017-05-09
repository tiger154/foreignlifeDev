@extends('layouts.room.base')
@section('room.content')
       @include('room.nav')

       <h3>방 구하기</h3>

       @foreach ($rooms as $room)
       <div class="room row">
              <div class="col-sm-12 col-md-12">
                     <div class="thumbnail right-caption">
                            <img src="{{ $room->image }}" alt="">
                            <!--<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTViMmNmOWFmOTEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNWIyY2Y5YWY5MSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44MDQ2ODc1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="242x200">-->
                            <div class="caption">
                                   <h3><a href="/room/{{ $room->id }}">{{ $room->title }}</a></h3>
                                   {!! $room->content !!}
                            </div>
                            <div class="caption-footer">
                                   <div class="caption-footer-left">
                                          <div class="listing-results-left">
                                                 <p itemscope="" itemtype="https://schema.org/RealEstateAgent" class="top-half listing-results-marketed">
                                                        <small>Listed on 28th Mar 2017 by</small><br>
                                                        <span itemprop="name">Persimmon - The Hawthorns, TS26</span>
                                                 </p>
                                          </div>
                                   </div>
                                   <div class="caption-footer-right">
                                          <p class="noprint list-inline actions">
                                                <span class="agent_phone">
                                                    <a href="tel:{{ str_replace('-','',$room->phone) }}" data-ga-category="Lead single (new-homes)" data-ga-action="Call" data-ga-label="/tracking/new-homes/results//76139"><i class="fa fa-phone" aria-hidden="true"></i> {{ $room->phone }}</a>
                                                </span>
                                                 <button class="btn btn-default btn-sm">Contact</button>
                                                 <button class="btn btn-default btn-sm">Save</button>
                                                 <button class="btn btn-default btn-sm">Hide</button>

                                                 <!--
                                                 <a itemprop="potentialAction" itemscope="" itemtype="https://schema.org/AskAction" data-ga-category="Lead single new-homes" data-ga-action="Contact agent" data-ga-label="/tracking/new-homes/results/" href="/new-homes/contact/43402646?action=Contact%20agent&amp;label=%2Fnew-homes%2Fresults%2F&amp;search_identifier=4792091dc3f19deabf0fbf66b171ca35&amp;type=email">
                                                        <meta itemprop="target" content="/new-homes/contact/43402646?action=Contact%20agent&amp;label=%2Fnew-homes%2Fresults%2F&amp;search_identifier=4792091dc3f19deabf0fbf66b171ca35&amp;type=email">
                                                        <meta itemprop="question" content="Find out more information about the property.">
                                                        <i class="icon icon-mail"></i>Contact
                                                 </a>
                                                 <a data-ga-category="Save to Favourites" data-ga-action="Click" data-ga-label="Started" data-taxonomy="{&quot;listings_category&quot;:&quot;residential&quot;,&quot;action&quot;:&quot;favourite_listing&quot;,&quot;section&quot;:&quot;new-homes&quot;,&quot;activity&quot;:&quot;user_account&quot;}" class="link-novisit favourite-icon " href="/myaccount/favourites/listings/add/43402646">
                                                        <i class="icon icon-star"></i>
                                                        <span>Save</span></a>
                                                 <a data-taxonomy="{&quot;listings_category&quot;:&quot;residential&quot;,&quot;action&quot;:&quot;hide_listing&quot;,&quot;section&quot;:&quot;new-homes&quot;,&quot;activity&quot;:&quot;user_account&quot;}" data-ga-category="Hidden listings" data-ga-action="Hide" data-ga-label="/tracking/new-homes/results/" data-listing-id="43402646" data-hidden="false" data-section="new-homes" class=" last" href="/myaccount/hidden-listings/hide/43402646?section=new-homes&amp;redirect=%2Fnew-homes%2Fproperty%2Fhartlepool%2F%3Fpage_size%3D25%26pn%3D1%26view_type%3Dlist" rel="nofollow"><i class="icon icon-block"></i><span class="js-hide-listing-copy" data-hide-copy="Hide" data-unhide-copy="Unhide">Hide</span></a>
                                                 -->
                                          </p>
                                   </div>
                            </div>
                     </div>
              </div>
       </div>
       @endforeach

@endsection