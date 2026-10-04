/**
 * app.js — Digital Learn Platform Client Utilities
 * Toast system, Modal dialogs, Mobile Nav, Quiz & Exam interactive demos
 */

document.addEventListener('DOMContentLoaded', function () {
  // Sidebar toggle (supports mobile drawer and desktop collapse)
  const menuToggle = document.getElementById('mobileSidebarToggle');
  const sidebarClose = document.getElementById('sidebarCloseBtn');
  const sidebar = document.querySelector('.app-sidebar');
  const backdrop = document.getElementById('sidebarBackdrop');
  const appShell = document.querySelector('.app-shell');

  function toggleSidebar(e) {
    if (e && e.preventDefault) e.preventDefault();
    if (window.innerWidth <= 768) {
      if (sidebar) sidebar.classList.toggle('is-open');
      if (backdrop) backdrop.classList.toggle('is-open');
    } else {
      if (appShell) {
        appShell.classList.toggle('sidebar-collapsed');
        try {
          const isCollapsed = appShell.classList.contains('sidebar-collapsed');
          localStorage.setItem('stmi_sidebar_collapsed', isCollapsed ? '1' : '0');
        } catch (e) {}
      }
    }
  }

  function closeSidebar(e) {
    if (e) {
      if (e.preventDefault) e.preventDefault();
      if (e.stopPropagation) e.stopPropagation();
    }
    if (window.innerWidth <= 768) {
      if (sidebar) sidebar.classList.remove('is-open');
      if (backdrop) backdrop.classList.remove('is-open');
    } else {
      if (appShell) {
        appShell.classList.add('sidebar-collapsed');
        try { localStorage.setItem('stmi_sidebar_collapsed', '1'); } catch (e) {}
      }
    }
  }

  // Restore desktop collapsed preference
  try {
    if (window.innerWidth > 768 && localStorage.getItem('stmi_sidebar_collapsed') === '1') {
      if (appShell) appShell.classList.add('sidebar-collapsed');
    }
  } catch (e) {}

  if (menuToggle) {
    menuToggle.addEventListener('click', toggleSidebar);
  }

  if (sidebarClose) {
    sidebarClose.addEventListener('click', closeSidebar);
  }

  if (backdrop) {
    backdrop.addEventListener('click', function () {
      if (sidebar) sidebar.classList.remove('is-open');
      if (backdrop) backdrop.classList.remove('is-open');
    });
  }

  // User mini menu toggle in sidebar
  const userCard = document.getElementById('sidebarUserCard');
  const userMenu = document.getElementById('sidebarUserMenu');
  if (userCard && userMenu) {
    userCard.addEventListener('click', function (e) {
      if (e.target.closest('.user-mini-menu')) return;
      userMenu.classList.toggle('is-open');
    });

    document.addEventListener('click', function (e) {
      if (!userCard.contains(e.target)) {
        userMenu.classList.remove('is-open');
      }
    });
  }

  // Password visibility toggle
  const togglePassButtons = document.querySelectorAll('.toggle-password-btn');
  togglePassButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const targetId = btn.getAttribute('data-target');
      const input = document.getElementById(targetId);
      if (input) {
        if (input.type === 'password') {
          input.type = 'text';
          btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 256 256"><path d="M228,175a8,8,0,0,1-10.92-3l-19-32.91a123.63,123.63,0,0,1-34.55,18.06l7.85,32.2a8,8,0,1,1-15.54,3.78l-8.2-33.65a121.28,121.28,0,0,1-39.28,0L99.78,193.1a8,8,0,1,1-15.54-3.78l7.85-32.2A123.63,123.63,0,0,1,57.54,139.06L38.52,172A8,8,0,0,1,24.68,164l20.4-35.33C33,116.79,24,103.11,24,100a8,8,0,0,1,16,0c0,2.37,8.21,15.22,17.43,26.47A119.86,119.86,0,0,1,128,108a119.86,119.86,0,0,1,70.57,18.47C207.79,115.22,216,102.37,216,100a8,8,0,0,1,16,0c0,3.11-9,16.79-21.08,28.67L231,164A8,8,0,0,1,228,175Z"/></svg>`;
        } else {
          input.type = 'password';
          btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 256 256"><path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"/></svg>`;
        }
      }
    });
  });

  // Tab switcher
  const filterTabs = document.querySelectorAll('.filter-tab');
  filterTabs.forEach(function (tab) {
    tab.addEventListener('click', function (e) {
      if (!tab.getAttribute('href') || tab.getAttribute('href') === '#') {
        e.preventDefault();
        const parent = tab.closest('.filter-tabs');
        if (parent) {
          parent.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
          tab.classList.add('active');
        }
      }
    });
  });

  // Quiz Option Selector (Interactive Demo)
  const quizOptions = document.querySelectorAll('.quiz-option-card');
  quizOptions.forEach(function (opt) {
    opt.addEventListener('click', function () {
      const container = opt.closest('.quiz-options-container');
      if (!container) return;
      container.querySelectorAll('.quiz-option-card').forEach(o => {
        o.classList.remove('is-selected');
      });
      opt.classList.add('is-selected');

      const isCorrect = opt.getAttribute('data-correct') === 'true';
      const feedbackBox = document.getElementById('quizFeedbackBox');
      const nextBtn = document.getElementById('quizNextBtn');

      if (isCorrect) {
        opt.classList.add('is-correct');
        if (feedbackBox) feedbackBox.style.display = 'flex';
        if (nextBtn) {
          nextBtn.removeAttribute('disabled');
          nextBtn.classList.remove('disabled');
        }
        window.showToast('Jawaban Anda Benar! (100% Akurat)', 'success');
      } else {
        opt.classList.add('is-wrong');
        if (feedbackBox) feedbackBox.style.display = 'none';
        window.showToast('Jawaban belum tepat. Silakan coba kembali!', 'error');
      }
    });
  });

  // Exam Timer Countdown
  const timerElem = document.getElementById('examCountdownTimer');
  if (timerElem) {
    let secondsLeft = 24 * 60 + 18; // 24:18
    const interval = setInterval(function () {
      secondsLeft--;
      if (secondsLeft <= 0) {
        clearInterval(interval);
        timerElem.textContent = '00:00';
        window.showToast('Waktu Ujian Habis! Jawaban Anda otomatis dikumpulkan.', 'error');
        setTimeout(function () {
          window.location.href = window.location.href.replace('/attempt', '/result');
        }, 1500);
        return;
      }
      const m = Math.floor(secondsLeft / 60);
      const s = secondsLeft % 60;
      timerElem.textContent = (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
    }, 1000);
  }

  // Exam Number Grid Interaction
  const examButtons = document.querySelectorAll('.exam-num-btn');
  examButtons.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      examButtons.forEach(b => b.classList.remove('status-active'));
      btn.classList.add('status-active');
      const qNum = btn.getAttribute('data-qnum');
      const questionLabel = document.getElementById('examQuestionNumLabel');
      if (questionLabel) {
        questionLabel.textContent = 'Soal Nomor ' + qNum + ' dari 25 • Bobot: 4 Poin';
      }
    });
  });

  // Flag toggle in exam
  const flagBtn = document.getElementById('btnToggleFlag');
  if (flagBtn) {
    flagBtn.addEventListener('click', function () {
      const activeBtn = document.querySelector('.exam-num-btn.status-active');
      if (activeBtn) {
        if (activeBtn.classList.contains('status-flagged')) {
          activeBtn.classList.remove('status-flagged');
          activeBtn.classList.add('status-answered');
          flagBtn.classList.remove('btn-warning');
          window.showToast('Tanda ragu-ragu dilepas.', 'info');
        } else {
          activeBtn.classList.add('status-flagged');
          flagBtn.classList.add('btn-warning');
          window.showToast('Soal ditandai ragu-ragu.', 'info');
        }
      }
    });
  }
});

// Toast notification helper
window.showToast = function (message, type = 'info') {
  let container = document.getElementById('toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.id = 'toastContainer';
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast toast-' + type;
  toast.innerHTML = `<span>${message}</span>`;
  container.appendChild(toast);

  setTimeout(function () {
    toast.style.opacity = '0';
    toast.style.transition = 'opacity 0.3s ease';
    setTimeout(function () {
      toast.remove();
    }, 300);
  }, 3500);
};

// Modal helpers
window.openModal = function (modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.add('is-open');
    document.body.style.overflow = 'hidden';
  }
};

window.closeModal = function (modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.classList.remove('is-open');
    document.body.style.overflow = '';
  }
};
