// List of all countries
const countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia",
    "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium",
    "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Central African Republic",
    "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus",
    "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt",
    "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France",
    "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Guatemala", "Guinea", "Haiti", "Honduras",
    "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica",
    "Japan", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Latvia", "Lebanon", "Libya", "Lithuania", "Luxembourg",
    "Malaysia", "Maldives", "Mexico", "Monaco", "Morocco", "Myanmar", "Nepal", "Netherlands", "New Zealand",
    "Nigeria", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Peru", "Philippines", "Poland",
    "Portugal", "Qatar", "Romania", "Russia", "Saudi Arabia", "Serbia", "Singapore", "Slovakia", "South Africa",
    "South Korea", "Spain", "Sri Lanka", "Sudan", "Sweden", "Switzerland", "Syria", "Thailand", "Tunisia",
    "Turkey", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Vietnam",
    "Yemen", "Zambia", "Zimbabwe"
];

// Function to populate the country dropdown
function populateCountryDropdown() {
    const countryDropdown = document.getElementById("country");

    if (!countryDropdown) {
        console.error("Dropdown not found!");
        return;
    }

    // Clear previous options
    countryDropdown.innerHTML = "";

    // Add default option
    let defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.textContent = "Select country";
    countryDropdown.appendChild(defaultOption);

    // Populate country list
    countries.forEach(country => {
        let option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        countryDropdown.appendChild(option);
    });
}

// Ensure the function runs after the page loads
document.addEventListener("DOMContentLoaded", populateCountryDropdown);
