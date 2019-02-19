@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-transparent">
        <div class="astronomy jumbotron bg-transparent">
          <h1 class="display-4">ज्योतिषशास्त्रले परमात्माको इच्छा प्रकट गर्छ</h1>
          <hr class="my-4">
          <h3>राशिफल &nbsp&nbsp&nbsp * &nbsp&nbsp&nbspमणि पत्थर&nbsp&nbsp&nbsp * &nbsp&nbsp&nbspचीना-टिप्पण
          &nbsp&nbsp&nbsp * &nbsp&nbsp&nbspवास्तु शास्त्र</h3>
          <br><br>
          <p class="lead">
            <a class="btn btn-outline-warning btn-lg" href="#" role="button">थप जान्नुहोस </a>
          </p>
        </div>
    </div>

    <div class="white jumbotron" id="about">
      <br><br>
      {{-- About Astroloy --}}
      <h2><span class="orange">ज्योतिषशास्त्रको</span> बारेमा</h2>
      <br>
      <p class="paragraph m-auto col-md-7">
        ज्योतिष भनेको सौर्यमण्डलमा रहेका ताराहरू र ग्रहहरूको आपसी सम्बन्धबाट प्राप्तहुने किरण अथवा तरंगलाई सुक्ष्म गणितीय सूत्रबाट अध्ययन गरेर त्यसको यस पृथ्वीमा विद्यमान जड र चेतन माथि पर्ने प्रभावको अध्ययन र विश्लेषण गर्ने अद्वितीय विज्ञान हो।
      </p>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <br>
                {{-- Know About Astrology --}}
                <h4>ज्योतिषशास्त्रको बारेमा जान्नुहोस्</h4>
                <p>
                    {{-- <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                     <br><br>
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. --}}
                    <br>ज्योतिषशास्त्रको प्रारम्भ मेसोपोटामियाको प्राचिन सभ्यतामा नै भएको थियो। ग्रिस हुँदै नेपालमा पनि त्यही विद्या फैलिएको हो भन्ने विद्वानहरूको धारणा छ। दक्षिण एसियामा  अहिले अभ्यास गरिँदै गरिएको ज्योतिषशास्त्रमा धेरै विविधता छ, र पश्चिमाको दाँजोमा धेरै कुरा थपिएको पनि छ। यहाँको सामाजिक परम्परा, दर्शन, स्थानीय विश्वास आदिको आधारमा यसको रूप नै अर्को जस्तो भैसक्यो।
                    <br><br>
                    प्रत्येक ग्रहको आफ्नो प्रकृति हुन्छ र ब्रह्माण्डको आफू रहेको ठाउँअनुसार विभिन्न खालका प्रभाव पार्दछ भन्ने विश्वास यसको आधार हो। पृथ्वी र यहाँका घटनाक्रम वा मानिसहरूमाथि यी प्रभावले निम्त्याउने परिणामको भविष्यवाणी गर्नु नै ज्योतिषशास्त्रको मुख्य उद्देश्य हो।
                    <br>
                </p>
            </div>
            <div class="col-sm-12 col-md-5" align="center">
                <img class="img-fluid" src="images/about.png">
            </div>
        </div>
    </div>

    <div class="default jumbotron">
      <br>
      {{-- Why Choose Us --}}
      <h2><span class="orange">तन्त्र ज्योतिष</span> नै किन?</h2>
      <br>
      <p class="paragraph">
        <ul>
            <li>चिना हेरी भूत भबिष्य त वर्तमान बारे जान्न बुझ्न।</li>
            <li>कुन्डलिको दोषको सटिक  रुपमा तन्त्र सम्मत उपाय प्रयोग गरि लाभ प्रप्त गर्न।</li>
            <li>ब्यपार ब्याबसाय करिय राजनिति आदिको क्षेत्रमा तपाईलाई मिल्ने सफलता बारे जान्न।</li>
        </ul>    
        जिबनका यातब घटनाक्रम बारे जानी सम्भाबित घटना प्रति पुर्ब तयारी गरि सुरक्षित रहनको लागि तपाईले हामीलाई सम्झिन सक्नु हुन्छ।तपाईलाई कुन रोगको खतरा छ लगायतका कुरा पहिलेनै जान्न सके तपाई सम्भाबित दिर्धरोगबाट पनि बच्न सक्नु हुन्छ।त्यसैले तपाईले हामीलाई सेवा गर्ने मैका दिनुहोस् ।
      </p>
        <br>
        <div class="m-row">
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_1.png"></span>
                <span class="imageInfo">विशेषज्ञ ज्योतिषी</span>
            </div>
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_2.png"></span>  
                <span class="imageInfo">24x7, 365 दिन उपलब्ध</span>
            </div>
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_3.png"></span>
                <span class="imageInfo">तुरुन्तै विश्वभर पहुँच</span> 
            </div>
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_4.png"></span>
                <span class="imageInfo">सही उपचार सम्बन्धी समाधानहरू</span>
            </div>
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_5.png"></span>
                <span class="imageInfo">गोपनीयताको ग्यारेन्टी</span>   
            </div>
            <div class="choose-icon col s12 m6 l4">
                <span class="image"><img src="images/ww_6.png"></span>
                <span class="imageInfo">ग्राहकहरु द्वारा विश्वसनीय</span>   
            </div>
        </div>
    </div>

    <div class="white jumbotron" id="services">
      <br><br>
      <h2>हाम्रा <span class="orange">सेवाहरू</span></h2>
      <br>
      {{-- <p class="paragraph m-auto col-md-7">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.
      </p> --}}
        <br><br><br>
        <div class="m-row">
            <div class="service-div col s12 m6 l4">
                <div class="service-icon">
                    <img src="images/sv1.png">
                    <h4>राशिफल</h4>
                    <p>राशीहरू मूलतः काल्पनिक तारापुञ्जहरू हुन् । सूर्यले पृथ्वीको वरिपरि ब्रह्माण्डमा घुम्ने बाटो ...</p>
                    <a href="{{ route('horoscopes') }}" class="btn btn-outline-dark">थप पढ्नुहोस्</a>
                </div>
            </div>
            <div class="service-div col s12 m6 l4">
                <div class="service-icon">
                    <img src="images/sv2.png">
                    <h4>मणि पत्थर</h4>
                    <p>तन्त्र ज्योतिष को भण्डारमा उपलब्ध मणि पत्थर हरु उत्कृस्ट गुणस्तर क हुनु का साथै सर्व सुलभ दर मा वितरण गरिन्छ...</p>
                    <a href="{{ route('gemstone') }}" class="btn btn-outline-dark">थप पढ्नुहोस्</a>
                </div>
            </div>
            <div class="service-div col s12 m6 l4">
                <div class="service-icon">
                    <img src="images/sv5.png">
                    <h4>चीना-टिप्पण</h4>
                    <p>कुण्डली मानवजीवनको सूक्ष्मद्रष्टा दर्पण हो । व्यवस्थित तरिकाले कुण्डलीको विवेचना र विश्लेषण गरिएको ...</p>
                    <a href="{{ route('birthjournal') }}" class="btn btn-outline-dark">थप पढ्नुहोस्</a>
                </div>
            </div>
            <div class="service-div col s12 m6 l4">
                <div class="service-icon">
                    <img src="images/sv6.png">
                    <h4>वास्तु शास्त्र</h4>
                    <p>वास्तुशास्त्र प्राचीन विज्ञान हो। यजुर्वेदको स्थापत्य अध्यायमा वास्तु शिल्पशास्त्रको...</p>
                    <a href="{{ route('vastushastra') }}" class="btn btn-outline-dark">थप पढ्नुहोस्</a>
                </div>
            </div>
        </div>
    </div>  

    <div class="default jumbotron">
        <h2><span class="orange">मूल्य</span> प्याकेज</h2>
        <br>
        <div class="container-fluid">
            <div class="m-row">

            @foreach($prices as $price)

                <div class="col s12 m12 l3">
                    <div class="package">
                        <h3>{{$price->package}}</h3>
                        <br>
                        <h2>रु {{$price->price}}</h2>
                        <br>

                        @auth 
                            {!! Form::open(['method'=>'POST', 'url'=>"/prices/$price->id/update"]) !!}    
                                <div class="form-group">
                                    {!! Form::text('price', $price->price, ['class'=>'form-control']) !!}
                                </div>
                              {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                            {!! Form::close() !!}
                        @endauth

                    </div>
                </div>  

            @endforeach

            </div>
        </div>  
    </div>      

@endsection
