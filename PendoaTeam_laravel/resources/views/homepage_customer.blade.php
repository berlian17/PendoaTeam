@extends('layout/layout2')
@section('content')

<div class="jumbotron m-4 text-white rounded" style="background-image: url({{ asset('image/image.jpg') }}); height: content; ">
    <div class="col-md-12">
        <h1 class="display-4 d-flex justify-content-center"><strong>Construction & Heavy Equipment Rental</strong></h1>
        <p class="lead my-3">No matter what heavy equipment you are looking to rent, our rental advisors are here to help every step of the way. We make it convenient and simple to locate the right construction equipment for you. And, we offer flexibility on hauling charges. With over 4,000 suppliers and more than 10,000 nationwide locations, CENTRAL is the largest equipment rental logistics company. With real-time rental management technology, you can easily manage your account and equipment on the go, from any device.</p>
    </div>
</div>

<!-- container 1 -->
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 mt-2">
            <h3><b>Equipment by Category</b></h3>
        </div>
    </div>
 
    <div class="row mt-5">
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/forklift.png') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item1 = 'Forklift';    
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item1}}" role="button">Forklift</a>                
                </div>
            </div>
        </div>
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/concrete pump.jpg') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item2 = 'Concrete pump';
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item2}}" role="button">Concrete Pump</a>                
                </div>
            </div>
        </div>
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/tower crane.jpg') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item3 = 'Tower crane';
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item3}}" role="button">Tower Crane</a>
                </div>
            </div>
        </div>        
    </div>

    <div class="row mt-5">
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/generating set.jpg') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item4 = 'Generating set';
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item4}}" role="button">Generating Set</a>                
                </div>
            </div>
        </div>
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/boom lift.jpg') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item5 = 'Boom lift';
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item5}}" role="button">Boom Lift</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" align="center">
            <div class="card" style="height: 450px" align="center">
                <div class="card-head">
                    <img src="{{ asset('image/passenger hoist.jpg') }}" style="height: 350px" class="img-fluid" alt="image">
                </div>
                <div class="card-body">
                    @php
                        $item6 = 'Passenger hoist';
                    @endphp
                    <a class="btn btn-primary col-md" href="/customer/listItem/{{$item6}}" role="button">Passenger Hoist</a>
                </div>
            </div>
        </div>           
    </div>
</div>

<!-- container 2 -->
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <h3><b>The best way to rent</b></h3>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h6><strong>Browse conveniently</strong></h6>
            <p>Central is here to help with your procurement. Access our directory and find hundreds of construction equipment assets that are ready to rent anytime and from anywhere.</p>
            <h6><strong>Talk to our experts</strong></h6>
            <p>We serve every request wholeheartedly. Take advantage of consulting services with our experts to find out the most appropriate solution for your job.</p>
            <h6><strong>We do the heavy lifting for you</strong></h6>
            <p>Say goodbye to complicated procurement processes. Save time with Central. From logistics to administration, we've taken care of everything for you.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('image/content.png') }}" alt="image" class="img-fluid mt-5 pt-3">
        </div>
    </div>
</div>

<!-- container 3 -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 mt-2">
            <h3><b>The solution to every project need</b></h3>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('image/concrete pump.jpg') }}" alt="image" style="height: 350px" class="img-fluid rounded">
            <h6><strong>Construction work</strong></h6>
            <p>Our machines offer the ability to complete any construction work, from quarrying or stockpiling on a home-scale project to high-value commercial contracts.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('image/passenger hoist.jpg') }}" alt="image" style="height: 350px" class="img-fluid rounded ml-5 pl-5">
            <h6><strong>Access to Height</strong></h6>
            <p>Passenger hoists are able to deliver your workers to heights or positions that are difficult to reach with other tools. Often used for construction work, building cleaning, or installation.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="blog-footer text-white rounded bg-dark mt-5" style="height: 350px">
    <div class="row p-4 ml-5 mr-2 row-head">
        <div class="col-md-5">
            <h4><b>Links</b></h4>
            <p>Coverage Areas</p>
            <p>Credit Application</p>
            <p>Site Map</p>
        </div>
        <div class="col-md-5">
            <h4><b>Contact Us</b></h4>
            <p>(888) 212-4567</p>
            <p>Central@gmail.com</p>
        </div>
        <div class="col-md-2">
            <h4><b>Follow Us</b></h4>
            <p>Instagram</p>
            <p>Facebook</p>
            <p>LinkedIn</p>
        </div>
    </div>
    <div class="ml-4">
        <div class="align-self-end ml-5" style="width: 350px">
            <p>Corporate Office Address: 1063 McGaw Ave. #200 Irvine, CA 92614</p>
        </div>
    </div>
    <div class="mt-5" align="center">
        <p>© 2020 Central, Inc.   |   Terms of Service   |   Privacy Policy</p>
    </div>
</footer>
    
@endsection