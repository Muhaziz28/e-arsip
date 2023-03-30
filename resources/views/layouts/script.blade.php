<script type="text/javascript">
    const MONTH_NAMES = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function app() {
        return {
            showDatepicker: false,
            datepickerValue: "",
            datepickerValue1: "",

            month: "",
            year: "",
            no_of_days: [],
            blankdays: [],
            days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],

            initDate() {
                let today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = "When will it start";
                this.datepickerValue1 = "When will it start";
            },

            isToday(date) {
                if (this.datepickerValue === "When will it start") {
                    const today = new Date();
                    const d = new Date(this.year, this.month, date);
                    return today.toDateString() === d.toDateString() ? true : false;
                } else {
                    const getValue =
                        this.datepickerValue +
                        " 00:00:00 GMT+0700 (Western Indonesia Time)";
                    const d = new Date(this.year, this.month, date);

                    return getValue == d ? true : false;
                }
            },

            getDateValue(date) {
                let selectedDate = new Date(this.year, this.month, date);
                this.datepickerValue = selectedDate.toDateString();
                this.datepickerValue1 =
                    ("0" + selectedDate.getDate()).slice(-2) +
                    " " +
                    MONTH_NAMES[selectedDate.getMonth()] +
                    " " +
                    selectedDate.getFullYear();
                this.$refs.date.value =
                    selectedDate.getFullYear() +
                    "-" +
                    ("0" + (selectedDate.getMonth() + 1)).slice(-2) +
                    "-" +
                    ("0" + selectedDate.getDate()).slice(-2);
                console.log(this.$refs.date.value);

                this.showDatepicker = false;
            },

            getNoOfDays() {
                let daysInMonth = new Date(
                    this.year,
                    this.month + 1,
                    0
                ).getDate();

                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            },
        };
    }
</script>
<script type="text/javascript">
    const loc1 = document.getElementById("loc1");
    loc1.addEventListener("click", (event) => {
        document.getElementById(
            "location"
        ).innerHTML = document.querySelector(
            "#loc1 > div > div > h2"
        ).innerHTML;
        document
            .getElementById("location_target")
            .setAttribute(
                "value",
                document.querySelector("#loc1 > div > div > h2").innerHTML
            );
    });
    const loc2 = document.getElementById("loc2");
    loc2.addEventListener("click", (event) => {
        document.getElementById(
            "location"
        ).innerHTML = document.querySelector(
            "#loc2 > div > div > h2"
        ).innerHTML;
        document
            .getElementById("location_target")
            .setAttribute(
                "value",
                document.querySelector("#loc2 > div > div > h2").innerHTML
            );
    });
    const loc3 = document.getElementById("loc3");
    loc3.addEventListener("click", (event) => {
        document.getElementById(
            "location"
        ).innerHTML = document.querySelector(
            "#loc3 > div > div > h2"
        ).innerHTML;
        document
            .getElementById("location_target")
            .setAttribute(
                "value",
                document.querySelector("#loc3 > div > div > h2").innerHTML
            );
    });
    const people1 = document.getElementById("people1");
    people1.addEventListener("click", (event) => {
        document.getElementById("people").innerHTML = "Solo (1 People)";
        document
            .getElementById("people_target")
            .setAttribute("value", "Solo (1 People)");
    });
    const people2 = document.getElementById("people2");
    people2.addEventListener("click", (event) => {
        document.getElementById("people").innerHTML = "Couple (1-2 People)";
        document
            .getElementById("people_target")
            .setAttribute("value", "Couple (1-2 People)");
    });
    const people3 = document.getElementById("people3");
    people3.addEventListener("click", (event) => {
        document.getElementById("people").innerHTML = "Group (10-50+ People)";
        document
            .getElementById("people_target")
            .setAttribute("value", "Group (10-50+ People)");
    });
</script>