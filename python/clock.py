
import datetime
import time

datetime.datetime.utcnow()
time.time()

def pretty_thousands(number):
    pretty_number = "{:,}".format(number)
    pretty_number = pretty_number.replace(',', '.')
    return pretty_number

tai_offset = 37
millis = 1000*time.time()
jd_ut = 2440587.5 + (millis / (8.64*10**7))
jd_tt = jd_ut + (tai_offset + 32.184) / 86400
j2000 = jd_tt - 2451545.0
msd = (((j2000 - 4.5) / 1.027491252) + 44796.0 - 0.00096)
mtc = (24 * msd) % 24
mtc_hours = int(mtc)
mtc_minutes = int((mtc - mtc_hours)*60)
mtc_seconds = int(((mtc - mtc_hours)*60 - mtc_minutes)*60)
mtc_time = datetime.time(hour=mtc_hours, minute=mtc_minutes, second=mtc_seconds)
mtc_hm = datetime.time(hour=mtc_hours, minute=mtc_minutes)
print ('</b>Mars Sol Date <b> ')
print(pretty_thousands(int(msd)) + '<br> </b> Mars Time <b> ' + str(mtc_hm)[0:5] + ' </b>')
