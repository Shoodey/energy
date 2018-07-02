<template>
    <div class="table-responsive">
        <table class="table card-table table-center table-hover text-nowrap">
            <thead>
            <tr>
                <th class="w-1">Time</th>
                <th>Name</th>
                <th>Owner</th>
                <th>Private</th>
                <th>Spectatable</th>
                <th>Rounds</th>
                <th>Players</th>
                <th class="w-1"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="game in games">
                <td><span class="text-muted">{{ getElapsedTime(game) }}</span></td>
                <td><a :href="game.url" class="text-inherit">{{ game.name }}</a></td>
                <td>{{ game.user.username }}</td>
                <td>
                    <i v-if="game.is_private" class="fe fe-lock text-red"></i>
                    <i v-else class="fe fe-unlock text-green"></i>
                </td>
                <td>
                    <i v-if="game.is_visible" class="fe fe-eye text-green"></i>
                    <i v-else class="fe fe-eye-off text-red"></i>
                </td>
                <td>
                    24
                </td>
                <td>
                    3
                </td>
                <td class="text-right">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                            Actions
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import moment from 'moment'

    export default {
        props: ['houses'],

        data() {
            return {
                currentTime: moment().unix()
            }
        },

        created() {
            let vm = this;
            setInterval(function () {
                vm.currentTime = moment().unix()
            })
        },

        methods: {
            getElapsedTime(game) {
                let difference = moment.unix(this.currentTime).diff(moment.unix(game.created_at));
                let duration = moment.duration(difference);

                let days = Math.floor(duration.asDays());
                let hours = Math.floor(duration.asHours());

                if(days){
                    return days + moment.utc(difference).format(":HH:mm:ss")
                }else if(hours){
                    return hours + moment.utc(difference).format(":mm:ss")
                }else {
                   return moment.utc(difference).format("mm:ss")
                }
            }
        }
    }
</script>
