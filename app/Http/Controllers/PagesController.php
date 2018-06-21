<?php

namespace App\Http\Controllers;

class PagesController  extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getSchedule() {
		return view('pages.talentSide.schedule');
	}

	public function getProjects() {
		return view('pages.talentSide.projects');
	}

	public function getTUserProfile() {
		return view('pages.talentSide.userprofile');
	}

	public function getRating() {
		return view('pages.talentSide.rating');
	}

	public function getKids() {
		return view('pages.guestSide.kids');
	}

	public function getTeens() {
		return view('pages.guestSide.teens');
	}

	public function getAdults() {
		return view('pages.guestSide.adults');
	}

	public function getJoinUs() {
		return view('pages.guestSide.joinus');
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function getKidsBoys() {
		return view('pages.guestSide.kidsBoys');
	}

	public function getKidsBoysAvailable() {
		return view('pages.guestSide.kidsBoysAvailable');
	}

	public function getKidsBoysNotAvailable() {
		return view('pages.guestSide.kidsBoysNotAvailable');
	}

	public function getKidsGirls() {
		return view('pages.guestSide.kidsGirls');
	}

	public function getKidsGirlsAvailable() {
		return view('pages.guestSide.kidsGirlsAvailable');
	}

	public function getKidsGirlsNotAvailable() {
		return view('pages.guestSide.kidsGirlsNotAvailable');
	}

	public function getTeensGents() {
		return view('pages.guestSide.teensGents');
	}

	public function getTeensGentsAvailable() {
		return view('pages.guestSide.teensGentsAvailable');
	}

	public function getTeensGentsNotAvailable() {
		return view('pages.guestSide.teensGentsNotAvailable');
	}

	public function getTeensLadies() {
		return view('pages.guestSide.teensLadies');
	}

	public function getTeensLadiesAvailable() {
		return view('pages.guestSide.teensLadiesAvailable');
	}

	public function getTeensLadiesNotAvailable() {
		return view('pages.guestSide.teensLadiesNotAvailable');
	}

	public function getAdultsMan() {
		return view('pages.guestSide.adultsMan');
	}

	public function getAdultsManAvailable() {
		return view('pages.guestSide.adultsManAvailable');
	}

	public function getAdultsManNotAvailable() {
		return view('pages.guestSide.adultsManNotAvailable');
	}

	public function getAdultsWoman() {
		return view('pages.guestSide.adultsWoman');
	}

	public function getAdultsWomanAvailable() {
		return view('pages.guestSide.adultsWomanAvailable');
	}

	public function getAdultsWomanNotAvailable() {
		return view('pages.guestSide.adultsWomanNotAvailable');
	}

	public function getCUserProfile() {
		return view('pages.customerSide.CUserprofile');
	}

	public function getTalentRequest() {
		return view('pages.customerSide.talentRequest');
	}

	public function getBookings() {
		return view('pages.customerSide.bookings');
	}

	public function getviewTalentTeens() {
		return view('pages.customerSide.viewTalentTeens');
	}

	public function getviewTalentKids() {
		return view('pages.customerSide.viewTalentKids');
	}

	public function getviewTalentAdults() {
		return view('pages.customerSide.viewTalentAdults');
	}

	public function getviewKidsGirls() {
		return view('pages.customerSide.viewKidsGirls');
	}

	public function getviewKidsGirlsAvailable() {
		return view('pages.customerSide.viewKidsGirlsAvailable');
	}

	public function getviewKidsGirlsNotAvailable() {
		return view('pages.customerSide.viewKidsGirlsNotAvailable');
	}

	public function getviewKidsBoys() {
		return view('pages.customerSide.viewKidsBoys');
	}

	public function getviewKidsBoysAvailable() {
		return view('pages.customerSide.viewKidsBoysAvailable');
	}

	public function getviewKidsBoysNotAvailable() {
		return view('pages.customerSide.viewKidsBoysNotAvailable');
	}

	public function getviewTeensLadies() {
		return view('pages.customerSide.viewTeensLadies');
	}

	public function getviewTeensLadiesAvailable() {
		return view('pages.customerSide.viewTeensLadiesAvailable');
	}

	public function getviewTeensLadiesNotAvailable() {
		return view('pages.customerSide.viewTeensLadiesNotAvailable');
	}

	public function getviewTeensGents() {
		return view('pages.customerSide.viewTeensGents');
	}

	public function getviewTeensGentsAvailable() {
		return view('pages.customerSide.viewTeensGentsAvailable');
	}

	public function getviewTeensGentsNotAvailable() {
		return view('pages.customerSide.viewTeensGentsNotAvailable');
	}

	public function getviewAdultsWoman() {
		return view('pages.customerSide.viewAdultsWoman');
	}

	public function getviewAdultsWomanAvailable() {
		return view('pages.customerSide.viewAdultsWomanAvailable');
	}

	public function getviewAdultsWomanNotAvailable() {
		return view('pages.customerSide.viewAdultsWomanNotAvailable');
	}

	public function getviewAdultsMan() {
		return view('pages.customerSide.viewAdultsMan');
	}

	public function getviewAdultsManAvailable() {
		return view('pages.customerSide.viewAdultsManAvailable');
	}

	public function getviewAdultsManNotAvailable() {
		return view('pages.customerSide.viewAdultsManNotAvailable');
	}

	public function getDashboard() {
		return view('pages.adminSide.dashboard');
	}
	
	public function getPendingApplication() {
		return view('pages.adminSide.pendingApplication');
	}

	public function getAudition() {
		return view('pages.adminSide.audition');
	}

	public function getTalentRequestAdmin() {
		return view('pages.adminSide.talentRequestAdmin');
	}
	
	public function getDeploymentKids() {
		return view('pages.adminSide.deploymentKids');
	}

	public function getDeploymentTeens() {
		return view('pages.adminSide.deploymentTeens');
	}

	public function getDeploymentAdults() {
		return view('pages.adminSide.deploymentAdults');
	}

	public function getSetCards() {
		return view('pages.adminSide.setCards');
	}

	public function getTalentSchedules() {
		return view('pages.adminSide.talentSchedules');
	}

	public function getTalentMaintenance() {
		return view('pages.adminSide.talentMaintenance');
	}

	public function getUsersMaintenance(){
		return view('pages.adminSide.users-maintenance');
	}

	public function getAddNewTalent(){
		return view('pages.adminSide.newTalent');
	}

	public function getError403(){
		return view('errors.403');
	}

}