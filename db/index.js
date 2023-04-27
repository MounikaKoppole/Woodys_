import mysql from 'mysql'

export default class DB {
    static _instance = null

    static get instance() {
        if(!DB._instance) {
            DB._instance = mysql.createConnection({
                host     : 'prophet.njit.edu',
                port: 1521,
                user     : 'sk3355',
                password : 'Himmu@100274',
                database : 'woodys'
            })
        }

        return DB._instance;
    }

}