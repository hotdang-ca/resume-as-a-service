<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Resume;
use App\Education;
use App\Experience;
use App\ContactSet;
use App\Skill;
use App\Language;
use App\Hobby;

class ResumesController extends Controller
{
    public function get($slug) {
      $resume = Resume::where('slug', '=', $slug)->first();
      $id = $resume->id;

      $educations = Education::where('resume_id', $id)->orderBy('year', 'desc')->get();
      $experiences = Experience::where('resume_id', $id)->orderBy('year_end', 'asc')->get();
      $contactset = ContactSet::where('resume_id', $id)->first();
      $skills = Skill::where('resume_id', $id)->orderBy('percentage', 'desc')->get();
      $languages = Language::where('resume_id', $id)->orderBy('percentage', 'desc')->get();
      $hobbies = Hobby::where('resume_id', 1)->get();

      foreach($experiences as $experience) {
        if ($experience['year_end'] == 0) {
          $experience['year_end'] = "present";
        }
      }

      return view('resumes.show',
      compact(
        'resume',
        'educations',
        'experiences',
        'contactset',
        'skills',
        'languages',
        'hobbies'
      ));
    }
}
