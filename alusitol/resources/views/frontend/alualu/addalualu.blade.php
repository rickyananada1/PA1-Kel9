@extends('frontend.body.banner2')
@section('main')
    <div class="contact">
        <div class="container">
            <div class="contact-form">
                <div class="contact-info">
                    <h2>FORM <span> ALU - ALU</span></h2>
                </div>
                <form action="{{ route('store.alu') }}" method="POST">
                    @csrf
                    <div class="contact-left"><br>
                        <input type="text"name="from" placeholder="From " required>
                        <input type="text"name="to" placeholder="Subject" required>
                    </div>
                    <div class="contact-right">
                        <textarea placeholder="Message" name="message"required></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
        </div>
    </div>
@endsection
