@php
$date = new DateTime($user->created_at);
$date = $date->format('d M Y');
$attrs = [
    "Coutnry" => "$user->country",
    "Job Posted" => "$jobcount",
    "Member Since" => "$date"
];
$skills = '';
foreach ($user->skills as $skill) {
    $skills = $skills . $skill . ','  ;  # code...
}
$skills  = rtrim($skills, ',');
@endphp

<x-clientOverview
   clientName="{{ $user->name }}"
   clientImg="{{ asset($user->img) }}"
   
   desc="{{ $skills }}"                
   :attrs=$attrs             
></x-clientOverview>