<script>
    export default {
        props: ['food', 'id'],

        data() {
            return {
                amount: ''
            }
        },
        methods: 
        {
            requestFood()
            {
                alert('alert')
                axios.post(this.endpoint, {
                    'food': this.food,
                    'amount': this.amount,
                    'user_id': this.id
                })
            }
        },
        computed:
        {
            endpoint()
            {
                return '/transfer'
            }
        }
    }
</script>
