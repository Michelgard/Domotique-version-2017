#!/usr/bin/env python
# -*- coding: utf-8 -*

import requests
import MySQLdb
paramMysql = {
    'host'   : 'localhost',
    'user'   : 'utildomotic',
    'passwd' : 'a55bX9c2mViv7Bps',
    'db'     : 'Base_Domotic'
}
sql ="""\
SELECT * FROM Autonome
"""

sql1 = """\
SELECT * FROM Position_prise
"""

try:
    # On  créé une conexion MySQL
    conn = MySQLdb.connect(**paramMysql)
    # On créé un curseur MySQL
    cur = conn.cursor(MySQLdb.cursors.DictCursor)
    # On exécute la requête SQL
    cur.execute(sql)
    # On récupère toutes les lignes du résultat de la requête
    rows = cur.fetchall()

    # On parcourt toutes les lignes
    for row in rows:
        # Pour récupérer les différentes valeurs des différents champs
        auto = row['Autonome']
        if auto == 'ON':
            cur.execute(sql1)
            # On récupère toutes les lignes du résultat de la requête
            rows1 = cur.fetchall()
            for row1 in rows1:
                nom = row1['N_Prise']
                prauto = row1['AUTO']
                if nom != 'VOLETLU' and prauto == 'OFF':
                    params = "/?" + nom + "=OFF"
                    r = requests.get("http://88.160.18.73:85", params=params)
                    sql2="UPDATE Position_prise SET  Valeur_Prise = 'OFF' WHERE  N_Prise ='" + nom +"'"
                    try:
                        # On exécute la requête SQL
                        cur.execute(sql2)
                        # On commit
                        conn.commit()
                    except MySQLdb.Error, e:
                        # En cas d'erreur on annule les modifications
                        conn.rollback()
except MySQLdb.Error, e:
    # En cas d'anomalie
    print "Error %d: %s" % (e.args[0],e.args[1])
    sys.exit(1)

finally:
    # On ferme la connexion
    if conn:
        conn.close()
