@extends('layouts.app')

@section('headSection')
<link rel="stylesheet" href="./css/resume.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card feature">
                  <div class="card-body">
                    <h4 class="card-title">Selected Expereince</h4>
                    <ul>
                        <h4>CloudEngage / Junior Engineer / 2017 - current</h4>
                        <p>Cloud Based tool for website personalization.  Portland, OR </p>
                        <p>Full Stack development work on SaaS marketing  application in PHP and JavaScript.  Created interactive feature tours, debugged unmaintained vendor libraries, implemented personalized user onboarding.</p>
                        <h4>Trupp HR / HR Business Partner / 2015-2016</h4>
                        <p>Small business human resource consultancy.  Portland, OR</p>
                        <p>Served as HR support for clients across multiple industries.  Helped executives create policy, address conflict, and manage the most challenging aspects of their teams.</p>
                        <h4>New Season Market / Multiple Positions / 2007-2015</h4>
                        <p>Values-driven neighborhood grocer.  Portland, OR</p>
                        <p>Supported growth and team engagement at high volume location with over 200 staff.  Held roles of HR asst. Manager, Service Manager, and various retail positions.</p>
                    </ul>
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">Education</h4>
                      <ul>
                          <li><strong>Portland State University</strong> / B.S. Economics / 2013</li>
                          <li><strong>Epicodus</strong> / Full Stack Developer Bootcamp / 2017</li>
                      </ul>
                  </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card detail">
                <div class="card-body">
                    <h4 class="card-title">Skillset</h4>
                    <ul>
                        <li><strong>Javascript</strong> -  Front end apps with Angular JS, D3 data visualization, AJAX, and jQuery.</li>
                        <li><strong>PHP</strong> - Phalcon PHP framework, Server-side MVC apps with Symfony/Silex/Twig, Content Management with Drupal(7 & 8)</li>
                        <li><strong>Data and Support</strong> - mySQL and Firebase JSON databases, dependency/task management with Gulp, composer and npm.</li>
                        <li><strong>Teamwork</strong> - experienced in conflict management, active listening, and generally being fun to work with.</li>
                        <li><strong>Adaptability</strong> -  quick and adaptive problem solver, accustomed to staying calm under pressure and learning on the fly.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
