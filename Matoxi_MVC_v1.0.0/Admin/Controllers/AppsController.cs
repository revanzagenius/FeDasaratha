using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class AppsController : Controller
    {
        // GET: Apps
        public ActionResult Calender()
        {
            return View();
        }
        public ActionResult Invoice()
        {
            return View();
        }
        public ActionResult Todo()
        {
            return View();
        }
    }
}