# Inserts data to database
import sqlite3


def menu():
    return int(input("1. Kattis\n2. Code Wars\n3. Misc\n4. end\n"))


dbFile = "solutions.db"
try:
    conn = sqlite3.connect(dbFile)
except Exception as e:
    print(e)
    exit()

while True:
    selection = menu()
    if selection == 1:
        tb = 'Kattis'
        url = input("url: ")
        title = input("title: ")
        date = input("date: ")
        dif = input("difficulty: ")
        print("Solution: ")
        sol = ''

        while True:
            line = input()
            if line.lower() == 'end':
                break
            sol += line + "\n"
        sol = sol[:len(sol) - 1]

       # string = f'INSERT INTO {tb}(Link,Title,Date,Difficulty,Solution) VALUES("{url}","{title}","{date}","{dif}","{sol}")'

       # print(string)
        conn.cursor().execute(
            f'INSERT INTO {tb}(Link,Title,Date,Difficulty,Solution) VALUES(?,?,?,?,?)', (url, title, date, dif, sol))
    else:
        break
conn.commit()
conn.close()