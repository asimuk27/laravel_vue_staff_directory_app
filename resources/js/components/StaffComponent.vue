<template>
    <div>
        <div class="pad-15-hor pad-15-ver search-parent">
            <div class="container-fluid">
                <div class="row">
                    <div><h2>Staff Directory</h2></div>

                    <div style="float: left;">
                        <input @input="search_text()" v-model="search.text" type="text" class="myInput" placeholder="Keywords.." />
                    </div>
                    <div style="float: left;">
                        <select @change="department_data" class="select_box">
                            <option value="" selected>All</option>
                            <option v-for="(staff, index) in staff_department" :key="index" :value="staff.department">
                                {{staff.department}}
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <table id="myTable">
                    <tr class="header">
                        <th style="width:10%;">First Name</th>
                        <th style="width:10%;">Last name</th>
                        <th style="width:10%;">Department</th>
                        <th style="width:70%;">Description</th>
                    </tr>
                    <tr v-for="(staff, index) in staff_data" :key="index">
                        <td>{{staff.first_name}}</td>
                        <td>{{staff.last_name}}</td>
                        <td>{{staff.department}}</td>
                        <td>{{staff.profile}}</td>
                    </tr>

                </table>
            </div>

        </div>
    </div>
</template>
<script>

    import axios from "axios";
    import _ from "lodash";

    export default {
        name: "Main",
        mounted() {
            this.hover_flag = false;
            var inside = this;
            axios
                .get("api/staff")
                .then(function(response) {
                    inside.staff_department = _.unionBy(response.data.data, (staff) => staff.department);
                    inside.staff_data_actual = response.data.data;
                    inside.staff_data = response.data.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        data() {
            return {
                staff_data_actual: [],
                staff_data: [],
                staff_department: [],
                selected_department: '',
                search: { filter: null, text: "" },
            };
        },
        methods: {

            search_text() {

                var inside = this;

                this.staff_data = this.staff_data_actual.filter(function(wonder) {
                    if (
                        wonder.first_name
                            .toLowerCase()
                            .indexOf(inside.search.text.toLowerCase()) != "-1"
                        ||

                        wonder.last_name
                            .toLowerCase()
                            .indexOf(inside.search.text.toLowerCase()) != "-1"
                        ||

                        wonder.department
                            .toLowerCase()
                            .indexOf(inside.search.text.toLowerCase()) != "-1"
                        ||
                        wonder.profile
                            .toLowerCase()
                            .indexOf(inside.search.text.toLowerCase()) != "-1"

                    ) {
                        return wonder;
                    }
                });
            },
            department_data(e) {
                var inside = this;
                console.log(e.target.value)
                let param = '';
                if( e.target.value == '' ) {
                    param = 'all';
                } else {
                    param = e.target.value;
                }

                axios
                    .get(`api/staff/${param}`)
                    .then(function(response) {
                        inside.staff_data = response.data.data;
                        inside.staff_data_actual = response.data.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        },
    };
</script>
<style scoped>
.search-parent {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
    background-color: lightgray;
}


.search-bar input {
    padding-left: 30px;
}


* {
    box-sizing: border-box;
}

.myInput {
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
}
.select_box {
    margin-left: 10px;height: 45px;
    width: 100%;
    font-size: 16px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
}
#myTable {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    font-size: 18px;
}

#myTable th, #myTable td {
    text-align: left;
    padding: 12px;
}

#myTable tr {
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    background-color: #f1f1f1;
}
</style>