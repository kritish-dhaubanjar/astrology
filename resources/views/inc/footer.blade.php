<!-- Footer -->
	<div id="footer">
		<div class="container">
			<img src="{{asset('images/logo.png')}}" width="100px">
			<p class="paragraph m-auto col-md-7">ज्योतिष भनेको सौर्यमण्डलमा रहेका ताराहरू र ग्रहहरूको आपसी सम्बन्धबाट प्राप्तहुने किरण अथवा तरंगलाई सुक्ष्म गणितीय सूत्रबाट अध्ययन गरेर त्यसको यस पृथ्वीमा विद्यमान जड र चेतन माथि पर्ने प्रभावको अध्ययन र विश्लेषण गर्ने अद्वितीय विज्ञान हो।</p>
			<br>
				<ul>
					<li style="display: inline-block;"><a href="https://www.youtube.com/channel/UCUikk7vUGYIbigxgnuJgwKQ" target="new"><img src="{{ asset('images/youtube.png') }}"></a></li>
					<li style="display: inline-block;"><a href="#"><img src="{{ asset('images/facebook.png') }}"> </a></li>
					<li style="display: inline-block;"><a href="#"><img src="{{ asset('images/instagram.png') }}"></a> </li>
					<li style="display: inline-block;"><a href="#"><img src="{{ asset('images/twitter.png') }}"> </a></li>
				</ul>
			<br>
			<div class="m-row">
				<div class="footer-item col s12 m3 lg3">
					<h4>हाम्रो न्यूजलेटर</h4>
					<hr>
					<p>प्रत्येक ग्रहको आफ्नो प्रकृति हुन्छ र ब्रह्माण्डको आफू रहेको ठाउँअनुसार विभिन्न खालका प्रभाव पार्दछ भन्ने विश्वास यसको आधार हो। पृथ्वी र यहाँका घटनाक्रम वा मानिसहरूमाथि यी प्रभावले निम्त्याउने परिणामको भविष्यवाणी गर्नु नै ज्योतिषशास्त्रको मुख्य उद्देश्य हो। </p>
				</div>
				<div class="footer-item col s12 m3 lg3">
					<h4>हाम्रा सेवाहरु</h4>
					<hr>
					<ul>
						<li><a href="{{ route('horoscopes') }}">राशिफल</a></li><hr>
						<li><a href="{{ route('gemstone') }}">मणि पत्थर</a></li><hr>
						<li><a href="{{ route('birthjournal') }}">चीना-टिप्पण</a></li><hr>
						<li><a href="{{ route('vastushastra') }}">वास्तु शास्त्र</a></li>
					</ul>
				</div>
				<div class="footer-item col s12 m2 lg2">
					<h4>साइट म्याप</h4>
					<hr>
					<ul>
						<li><a href="/">गृहपृष्ठ</li><hr>
						<li><a href="
							@if(Route::current()->getName() == 'home')	
				        	{{'#about'}}
				        @else
				        	{{ route('about') }}
				        @endif		
        				">हाम्रो बारेमा</a></li><hr>
						<li><a href="blog">व्लग</a></li><hr>
						<li><a href="videos">भिडियो</a></li><hr>
						<li><a href="
							@if(Route::current()->getName() == 'home')	
				        		{{'#services'}}
				        @else
				        		{{ route('services') }}
				        @endif
				        ">सेवाहरु</a></li><hr>
					</ul>
				</div>
				<div class="footer-item col s12 m4 lg4">
					<h4>सम्पर्कमा रहिरहनुहोस</h4>
					<hr>
					<ul>
						<li><a href="#"><i class="fas fa-home"></i>&nbsp&nbsp2794, Lalitpur, Kathmandu, Nepal</a></li><br>
						<li><a href="#"><i class="fas fa-at"></i>&nbsp&nbspexample@domain.com</a></li><br>
						<li><a href="#"><i class="fas fa-phone-volume"></i>&nbsp&nbsp+1800 326 3264</a></li><br>
						<div class="g-ytsubscribe" data-channelid="UCUikk7vUGYIbigxgnuJgwKQ" data-layout="full" data-count="default"></div>
					</ul>
				</div>
				<div align="center">Copyright © Tantra Jyotish 2018. All rights reserved.</div>
			</div>
		</div>
	</div>