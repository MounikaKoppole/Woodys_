import mariadb from 'mariadb'

export default class DB {
    static _instance = null

    static get instance() {
        if(!DB._instance) {
            mariadb.createConnection({
                host: 'localhost',
                user: 'root',
                database: 'woodys'
            }).then((connection) => {
                DB._instance = connection
            })
            .catch((err) => {
                console.log(err)
            })
        }
        return DB._instance;
    }

}
