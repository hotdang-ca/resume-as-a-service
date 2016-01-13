@extends ('resumes')

@section('aboutme')
<div class="box">
  <h2><em>Edit:</em> About Me</h2>
  {!! Form::model($resume, ['action' => 'ResumesController@storeAbout']) !!}
    {!! Form::textarea('about_me', null, ['class' => 'form-control'] ) !!}
    {!! Form::hidden('udid', $resume->udid) !!}
    {!! Form::submit('Save About', ['class' => 'btn btn-primary form-control']) !!}
  {!! Form::close() !!}
</div>
@stop

@section('education')
<div class="box">
  <h2><em>Edit:</em> Education</h2>
  @if(isset($educations))
  <ul id="education" class="clearfix">
    @foreach ($educations as $education)
    <li>
      <div class="year pull-left">{{ $education->year }}</div>
      <div class="description pull-right">
        <h3>{{ $education->title }} • {{ $education->facility }}</h3>
        <p>{{ $education->description }}</p>
      </div>
    </li>
    @endforeach
  </ul>
 @endif
 <div class=""
<!-- form for editing -->
{!! Form::open(['action' => 'ResumesController@newEducation']) !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Name of Award/Designation' ]) !!}
  {!! Form::number('year', null, ['class' => 'form-control', 'placeholder' => 'Year Completed' ]) !!}
  {!! Form::text('facility', null, ['class' => 'form-control', 'placeholder' => 'Facility Name' ]) !!}
  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description of accomplishments, certificates, diplomas, etc...' ]) !!}
  {!! Form::hidden('udid', $resume->udid) !!}
  {!! Form::submit('Add Education Entry', ['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}
<!-- end form -->

</div>
@stop

@section('experience')
<div class="box">
  <h2><em>Edit:</em> Experiences</h2>
  @if(isset($experiences))
  @foreach ($experiences as $experience)
  <div class="job clearfix">
    <div class="col-xs-3">
      <div class="where">{{ $experience->company}}</div>
      <div class="year">{{ $experience->year_start }} - {{ $experience->year_end }}</div>
    </div>
    <div class="col-xs-9">
      <div class="profession">{{ $experience->job_title }}</div>
      <div class="description">{{ $experience->description }}</div>
    </div>
  </div>
  @endforeach
  @endif
</div>
@stop

@section('contactset')
<div class="box clearfix">
  <h2><em>Edit:</em> Contact</h2>
  @if(isset($contactset))
  @if($contactset->phone)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
    <div class="title only pull-right"><a href="tel:{{ $contactset->phone }}">{{ $contactset->phone }}</a></div>
  </div>
  @endif

  @if($contactset->email)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
    <div class="title only pull-right"><a href="mailto:{{ $contactset->email }}?Subject=Resume">{{ $contactset->email }}</a></div>
  </div>
  @endif

  @if($contactset->twitter)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
    <div class="title pull-right">Twitter</div>
    <div class="description pull-right"><a href="https://twitter.com/{{ $contactset->twitter }}" target="_blank">https://twitter.com/{{ $contactset->twitter }}</a></div>
  </div>
  @endif

  @if($contactset->facebook)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-facebook fa-fw"></span></div>
    <div class="title pull-right">Facebook</div>
    <div class="description pull-right"><a href="https://www.facebook.com/{{ $contactset->facebook }}" target="_blank">https://www.facebook.com/{{ $contactset->facebook }}</a></div>
  </div>
  @endif

  @if($contactset->skype)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-skype fa-fw"></span></div>
    <div class="title pull-right">Skype</div>
    <div class="description pull-right"><a href="skype://{{ $contactset->skype }}">{{ $contactset->skype }}</a></div>
  </div>
  @endif

  @if($contactset->linkedin)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-linkedin fa-fw"></span></div>
    <div class="title pull-right">LinkedIn</div>
    <div class="description pull-right">{{ $contactset->linkedin }}</div>
  </div>
  @endif

  @if($contactset->googleplus)
  <div class="contact-item">
    <div class="icon pull-left text-center"><span class="fa fa-google-plus fa-fw"></span></div>
    <div class="title pull-right">Google+</div>
    <div class="description pull-right">{{ $contactset->googleplus }}</div>
  </div>
  @endif
  @endif
</div>
@stop

@section('skills')
<div class="box">
  <h2><em>Edit:</em> Skills</h2>
  @if(isset($skills))
  <div class="skills">
    @foreach($skills as $skill)
    <div class="item-skills" data-percent="{{ $skill->percentage / 100 }}">{{ $skill->name }}</div>
    @endforeach
    <div class="skills-legend clearfix">
      <div class="legend-left legend">Beginner</div>
      <div class="legend-left legend"><span>Proficient</span></div>
      <div class="legend-right legend"><span>Expert</span></div>
      <div class="legend-right legend">Master</div>
    </div>
  </div>
  @endif
</div>
@stop

@section('languages')
<div class="box">
  <h2><em>Edit:</em> Spoken/Written Languages</h2>
  @if(isset($languages))
  <div id="language-skills">
    @foreach($languages as $language)
    <div class="skill">{{ $language->name }} <div class="icons pull-right"><div style="width: {{ $language->percentage }}%;" class="icons-red"></div></div></div>
    @endforeach
  </div>
  @endif
</div>
@stop

@section('hobbies')
<div class="box">
  <h2><em>Edit:</em> Hobbies</h2>
  @if(isset($hobbies))
  @foreach($hobbies as $hobby)
  <div class="hobby">{{ $hobby->name }}</div>
  @endforeach
  @endif
</div>
@stop
