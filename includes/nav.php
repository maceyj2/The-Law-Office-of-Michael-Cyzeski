<nav id="top_nav" class="clr hide_mobile">
	<ul id="sub_nav_parent" class="clr">
		<li><a <?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='index.php'? 'class="navactive' : '');?> href="/">Home</a></li>			
		<li><a class="top_level <?php if($_GET['practice_area']=='criminal_defense'){ echo 'navactive';} ?>" href="criminal_defense.php?practice_area=criminal_defense">Criminal Defense<span class="icon-down-open-big"></span><span class="icon-right-open-big"></span></a>
			<ul class="sub_nav_1">
				<li><a href="criminal_defense.php?practice_area=criminal_defense">Criminal Defense (overview)</a></li>
				
				<li><a class="top_level" href="drug_crimes.php?practice_area=criminal_defense">Drug Crimes</span><span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="drug_crimes.php?practice_area=criminal_defense">Drug Crimes (overview)</a></li>
						<li><a href="distribution_of_controlled_substance.php?practice_area=criminal_defense">Distribution of a Controlled Substance / Possession with Intent to Distribute Controlled Substance</a></li>
						<li><a href="possession_of_controlled_substance.php?practice_area=criminal_defense">Possession of a Controlled Substance</a></li>
						<li><a href="school_zone_violation.php?practice_area=criminal_defense">School Zone Violation</a></li>
						<li><a href="sale_of_drug_paraphernalia.php?practice_area=criminal_defense">Sale of Drug Paraphernalia</a></li>
						<li><a href="rmv_suspensions.php?practice_area=criminal_defense">RMV Suspensions</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="firearms_and_weapons.php?practice_area=criminal_defense">Firearms &amp; Weapons Offenses<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="firearms_and_weapons.php?practice_area=criminal_defense">Firearms &amp; Weapons Offenses (overview)</a></li>
						<li><a href="carrying_a_firearm.php?practice_area=criminal_defense">Carrying a Firearm</a></li>
						<li><a href="firearm_deface_serial_number.php?practice_area=criminal_defense">Receiving a Firearm with a Defaced Serial Number</a></li>
						<li><a href="firearm_deface_serial_number_felony.php?practice_area=criminal_defense">Possession of a Firearm with a Defaced Serial Number During a Felony</a></li>
						<li><a href="carrying_a_dangerous_weapon.php?practice_area=criminal_defense">Carrying a Dangerous Weapon</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="harassment_crimes.php?practice_area=criminal_defense">Harassment Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="harassment_crimes.php?practice_area=criminal_defense">Harassment Crimes (overview)</a></li>
						<li><a href="criminal_harassment.php?practice_area=criminal_defense">Criminal Harassment</a></li>
						<li><a href="stalking.php?practice_area=criminal_defense">Stalking</a></li>
						<li><a href="violation_of_restraining_order.php?practice_area=criminal_defense">Violation of a Restraining Order</a></li>
						<li><a href="violation_harassment_prevention_order.php?practice_area=criminal_defense">Violation of a Harassment Prevention Order</a></li>
						<li><a href="making_harassing_phone_calls.php?practice_area=criminal_defense">Making Harassing Phone Calls</a></li>
						<li><a href="civil_rights_violations.php?practice_area=criminal_defense">Civil Rights Violations</a></li>
						<li><a href="threatening_to_commit_crime.php?practice_area=criminal_defense">Threatening to Commit a Crime</a></li>
						<li><a href="intimidating_a_witness.php?practice_area=criminal_defense">Intimidating a Witness</a></li>
					</ul>
				</li>

				<li><a class="top_level" href="motor_vehicle_crimes.php?practice_area=criminal_defense">Motor Vehicle Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="motor_vehicle_crimes.php?practice_area=criminal_defense">Motor Vehicle Crimes (overview)</a></li>
						<li><a href="homicide_motor_vehicle.php?practice_area=criminal_defense">Homicide by Motor Vehicle</a></li>
						<li><a href="leaving_scene_accident_property_damage.php?practice_area=criminal_defense">Leaving the Scene of an Accident Involving Property Damage</a></li>
						<li><a href="leaving_scene_accident_personal_injury.php?practice_area=criminal_defense">Leaving the Scene of an Accident Involving Personal Injury</a></li>
						<li><a href="reckless_negligent_operation.php?practice_area=criminal_defense">Reckless / Negligent Operation</a></li>
						<li><a href="use_vehicle_without_authority.php?practice_area=criminal_defense">Use of Vehicle without Authority</a></li>
						<li><a href="operating_with_suspended_license.php?practice_area=criminal_defense">Operating with a Suspended License</a></li>
						<li><a href="road_racing.php?practice_area=criminal_defense">Road Racing</a></li>
						<li><a href="oui_dui_motor_vehicle.php?practice_area=criminal_defense">OUI / DUI / OUI Drugs</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="property_crimes.php?practice_area=criminal_defense">Property Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="property_crimes.php?practice_area=criminal_defense">Property Crimes (overview)</a></li>
						<li><a href="arson.php?practice_area=criminal_defense">Arson</a></li>
						<li><a href="willful_malicious_destruction_of_property.php?practice_area=criminal_defense">Willful and Malicious Destruction of Property</a></li>
						<li><a href="willful_wanton_destruction.php?practice_area=criminal_defense">Willful or Wanton Destruction of a House of Worship, Cemetery or School</a></li>
						<li><a href="burning_insured_property.php?practice_area=criminal_defense">Burning Insured Property</a></li>
						<li><a href="burning_personal_property.php?practice_area=criminal_defense">Burning Personal Property</a></li>
						<li><a href="trespassing.php?practice_area=criminal_defense">Trespassing</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="sex_crimes.php?practice_area=criminal_defense">Sex Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="sex_crimes.php?practice_area=criminal_defense">Sex Crimes (overview)</a></li>
						<li><a href="rape.php?practice_area=criminal_defense">Rape</a></li>
						<li><a href="aggravated_rape.php?practice_area=criminal_defense">Aggravated Rape</a></li>
						<li><a href="statutory_rape.php?practice_area=criminal_defense">Statutory Rape</a></li>
						<li><a href="statutory_rape_by_force.php?practice_area=criminal_defense">Statutory Rape by Force</a></li>
						<li><a href="assault_with_intent_to_rape.php?practice_area=criminal_defense">Assault with the Intent to Rape</a></li>
						<li><a href="rape_armed_with_firearm.php?practice_area=criminal_defense">Rape Armed with a Firearm</a></li>
						<li><a href="failure_to_register_as_sex_offender.php?practice_area=criminal_defense">Failure to Register as a Sex Offender</a></li>
						<li><a href="lewd_lascivious_behavior.php?practice_area=criminal_defense">Open and Gross Lewd and Lascivious Behavior</a></li>
						<li><a href="prostitution.php?practice_area=criminal_defense">Prostitution</a></li>
						<li><a href="soliciting_a_prostitute.php?practice_area=criminal_defense">Soliciting a Prostitute</a></li>
						<li><a href="deriving_support_from_prostitute.php?practice_area=criminal_defense">Deriving Support from Earnings of a Prostitute</a></li>
						<li><a href="indecent_exposure.php?practice_area=criminal_defense">Indecent Exposure</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="theft_crimes.php?practice_area=criminal_defense">Theft Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="theft_crimes.php?practice_area=criminal_defense">Theft Crimes (overview)</a></li>
						<li><a href="larcency_by_stealing_in_building.php?practice_area=criminal_defense">Larceny by Stealing in a Building</a></li>
						<li><a href="larcency_by_check.php?practice_area=criminal_defense">Larceny by Check</a></li>
						<li><a href="larcency_by_false_pretenses.php?practice_area=criminal_defense">Larceny by False Pretenses</a></li>
						<li><a href="larcency_by_stealing.php?practice_area=criminal_defense">Larceny by Stealing</a></li>
						<li><a href="larcency_from_person.php?practice_area=criminal_defense">Larceny from the Person</a></li>
						<li><a href="motor_vehicle_theft.php?practice_area=criminal_defense">Motor Vehicle Theft</a></li>
						<li><a href="receiving_stolen_property.php?practice_area=criminal_defense">Receiving Stolen Property</a></li>
						<li><a href="breaking_and_entering.php?practice_area=criminal_defense">Breaking and Entering</a></li>
						<li><a href="burglary.php?practice_area=criminal_defense">Burglary</a></li>
						<li><a href="possession_of_burglarious_tools.php?practice_area=criminal_defense">Possession of Burglarious Tools</a></li>
						<li><a href="larcency_by_embezzlement.php?practice_area=criminal_defense">Larceny by Embezzlement</a></li>
						<li><a href="extortion.php?practice_area=criminal_defense">Extortion</a></li>
					</ul>
				</li>
				
				<li><a class="top_level" href="violent_crimes.php?practice_area=criminal_defense">Violent Crimes<span class="icon-right-open-big"></span><span class="icon-down-open-big"></span></a>
					<ul class="sub_nav_2">
						<li><a href="violent_crimes.php?practice_area=criminal_defense">Violent Crimes (overview)</a></li>
						<li><a href="assault_and_battery.php?practice_area=criminal_defense">Assault and Battery</a></li>
						<li><a href="robbery.php?practice_area=criminal_defense">Robbery</a></li>
						<li><a href="kidnapping.php?practice_area=criminal_defense">Kidnapping</a></li>
						<li><a href="mayhem.php?practice_area=criminal_defense">Mayhem</a></li>
					</ul>
				</li>
			</ul>
		</li>
		
		<li id="dui_oui"><a class="top_level <?php if($_GET['practice_area']=='dui_oui'){ echo 'navactive';} ?>" href="dui_oui.php?practice_area=dui_oui">DUI / OUI<span class="icon-down-open-big"></span><span class="icon-right-open-big"></span></a>
			<ul class="sub_nav_1">
				<li><a href="dui_oui.php?practice_area=dui_oui">DUI / OUI (overview)</a></li>
				<li><a href="penalties.php?practice_area=dui_oui">DUI / OUI Penalties</a></li>
				<li><a href="breath_test.php?practice_area=dui_oui">Breath Test</a></li>
				<li><a href="field_sobriety_test.php?practice_area=dui_oui">Field Sobriety Test</a></li>
				<li><a href="oui_drugs.php?practice_area=dui_oui">OUI Drugs</a></li>
				<li><a href="helpful_tips.php?practice_area=dui_oui">Helpful Tips</a></li>
			</ul>
		</li>
		
		<li><a <?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='civil_litigation.php'? 'class="navactive' : '');?> href="civil_litigation.php">Civil Litigation</a></li>
		
		<li><a <?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='attorney_profile.php'? 'class="navactive' : '');?> href="attorney_profile.php">Attorney Profile</a></li>
		
		<li><a <?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='resources.php'? 'class="navactive' : '');?> href="resources.php">Resources</a></li>
		
		<li><a id="contact" <?php echo (basename($_SERVER['SCRIPT_FILENAME'])=='contact.php'? 'class="navactive' : '');?> href="contact.php">Contact</a></li>
	</ul>
</nav>